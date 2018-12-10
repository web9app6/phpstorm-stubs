<?php

namespace Model;

use Exception;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use ReflectionMethod;

class PHPMethod extends PHPFunction
{
    public $is_static;
    public $access;
    public $is_final;
    public $parentName = null;

    public function readObjectFromReflection($method)
    {
        $this->name = $method->name;
        $this->is_static = $method->isStatic();
        $this->is_final = $method->isFinal();
        foreach ($method->getParameters() as $parameter) {
            $this->parameters[] = (new PHPParameter())->readObjectFromReflection($parameter);
        }

        if ($method->isProtected()) {
            $access = 'protected';
        } else if ($method->isPrivate()) {
            $access = 'private';
        } else {
            $access = 'public';
        }
        $this->access = $access;
        return $this;
    }

    /**
     * @param ReflectionMethod $node
     * @return $this|mixed|PHPFunction
     */
    public function readObjectFromStubNode($node)
    {
        $this->parentName = $this->getFQN($node->getAttribute('parent'));
        $this->name = $node->name->name;

        //this will test PHPDocs
        $this->parseError = null;
        $this->returnTag = null;
        $this->collectLinks($node);
        $this->checkDeprecationTag($node);
        $this->checkReturnTag($node);

        if (strncmp($this->name, 'PS_UNRESERVE_PREFIX_', 20) === 0) {
            $this->name = substr($this->name, strlen('PS_UNRESERVE_PREFIX_'));
        }
        $this->parameters = $this->parseParams($node);
        $this->is_final = $node->isFinal();
        $this->is_static = $node->isStatic();
        if ($node->isPrivate()) {
            $this->access = 'private';
        } elseif ($node->isProtected()) {
            $this->access = 'protected';
        } else {
            $this->access = 'public';
        }
        return $this;
    }
}