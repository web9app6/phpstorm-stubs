<?php

// Start of zlib v.2.0
use JetBrains\PhpStorm\Deprecated;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Pure;

/**
 * Output a gz-file
 * @link https://php.net/manual/en/function.readgzfile.php
 * @param string $filename <p>
 * The file name. This file will be opened from the filesystem and its
 * contents written to standard output.
 * </p>
 * @param int $use_include_path [optional] <p>
 * You can set this optional parameter to 1, if you
 * want to search for the file in the include_path too.
 * </p>
 * @return int|false the number of (uncompressed) bytes read from the file, or FALSE on error
 */
function readgzfile ($filename, $use_include_path = 0) {}

/**
 * Rewind the position of a gz-file pointer
 * @link https://php.net/manual/en/function.gzrewind.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function gzrewind ($stream) {}

/**
 * Close an open gz-file pointer
 * @link https://php.net/manual/en/function.gzclose.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function gzclose ($stream) {}

/**
 * Test for EOF on a gz-file pointer
 * @link https://php.net/manual/en/function.gzeof.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return int|bool <b>TRUE</b> if the gz-file pointer is at EOF or an error occurs;
 * otherwise returns <b>FALSE</b>.
 */
function gzeof ($stream) {}

/**
 * Get character from gz-file pointer
 * @link https://php.net/manual/en/function.gzgetc.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return string|false The uncompressed character or <b>FALSE</b> on EOF (unlike <b>gzeof</b>).
 */
function gzgetc ($stream) {}

/**
 * Get line from file pointer
 * @link https://php.net/manual/en/function.gzgets.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param int $length [optional] <p>
 * The length of data to get.
 * </p>
 * @return string|false The uncompressed string, or <b>FALSE</b> on error.
 */
function gzgets ($stream, $length) {}

/**
 * Get line from gz-file pointer and strip HTML tags
 * @link https://php.net/manual/en/function.gzgetss.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param int $length <p>
 * The length of data to get.
 * </p>
 * @param string $allowable_tags [optional] <p>
 * You can use this optional parameter to specify tags which should not
 * be stripped.
 * </p>
 * @return string|false The uncompressed and striped string, or <b>FALSE</b> on error.
 * @removed 8.0
 */
#[Deprecated(since: "7.3")]
function gzgetss ($zp, $length, $allowable_tags = null) {}

/**
 * Binary-safe gz-file read
 * @link https://php.net/manual/en/function.gzread.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param int $length <p>
 * The number of bytes to read.
 * </p>
 * @return string The data that have been read.
 */
function gzread ($stream, $length) {}

/**
 * Open gz-file
 * @link https://php.net/manual/en/function.gzopen.php
 * @param string $filename <p>
 * The file name.
 * </p>
 * @param string $mode <p>
 * As in <b>fopen</b> (rb or
 * wb) but can also include a compression level
 * (wb9) or a strategy: f for
 * filtered data as in wb6f, h for
 * Huffman only compression as in wb1h.
 * (See the description of deflateInit2
 * in zlib.h for
 * more information about the strategy parameter.)
 * </p>
 * @param int $use_include_path [optional] <p>
 * You can set this optional parameter to 1, if you
 * want to search for the file in the include_path too.
 * </p>
 * @return resource|false a file pointer to the file opened, after that, everything you read
 * from this file descriptor will be transparently decompressed and what you
 * write gets compressed.
 * </p>
 * <p>
 * If the open fails, the function returns <b>FALSE</b>.
 */
function gzopen ($filename, $mode, $use_include_path = 0) {}

/**
 * Output all remaining data on a gz-file pointer
 * @link https://php.net/manual/en/function.gzpassthru.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return int The number of uncompressed characters read from <i>gz</i>
 * and passed through to the input, or <b>FALSE</b> on error.
 */
function gzpassthru ($stream) {}

/**
 * Seek on a gz-file pointer
 * @link https://php.net/manual/en/function.gzseek.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param int $offset <p>
 * The seeked offset.
 * </p>
 * @param int $whence [optional] <p>
 * <i>whence</i> values are:
 * <b>SEEK_SET</b> - Set position equal to <i>offset</i> bytes.
 * <b>SEEK_CUR</b> - Set position to current location plus <i>offset</i>.
 * </p>
 * <p>
 * If <i>whence</i> is not specified, it is assumed to be
 * <b>SEEK_SET</b>.
 * </p>
 * @return int Upon success, returns 0; otherwise, returns -1. Note that seeking
 * past EOF is not considered an error.
 */
function gzseek ($stream, $offset, $whence = SEEK_SET) {}

/**
 * Tell gz-file pointer read/write position
 * @link https://php.net/manual/en/function.gztell.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return int|false The position of the file pointer or <b>FALSE</b> if an error occurs.
 */
function gztell ($stream) {}

/**
 * Binary-safe gz-file write
 * @link https://php.net/manual/en/function.gzwrite.php
 * @param resource $stream <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param string $data <p>
 * The string to write.
 * </p>
 * @param int $length [optional] <p>
 * The number of uncompressed bytes to write. If supplied, writing will
 * stop after <i>length</i> (uncompressed) bytes have been
 * written or the end of <i>string</i> is reached,
 * whichever comes first.
 * </p>
 * <p>
 * Note that if the <i>length</i> argument is given,
 * then the magic_quotes_runtime
 * configuration option will be ignored and no slashes will be
 * stripped from <i>string</i>.
 * </p>
 * @return int the number of (uncompressed) bytes written to the given gz-file
 * stream.
 */
function gzwrite ($stream, $data, $length = null) {}

/**
 * Alias of <b>gzwrite</b>
 * @link https://php.net/manual/en/function.gzputs.php
 * @param resource $stream
 * @param string $data
 * @param int $length [optional]
 */
function gzputs ($stream, $data, $length) {}

/**
 * Read entire gz-file into an array
 * @link https://php.net/manual/en/function.gzfile.php
 * @param string $filename <p>
 * The file name.
 * </p>
 * @param int $use_include_path [optional] <p>
 * You can set this optional parameter to 1, if you
 * want to search for the file in the include_path too.
 * </p>
 * @return array An array containing the file, one line per cell.
 */
function gzfile ($filename, $use_include_path = 0) {}

/**
 * Compress a string
 * @link https://php.net/manual/en/function.gzcompress.php
 * @param string $data <p>
 * The data to compress.
 * </p>
 * @param int $level [optional] <p>
 * The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression.
 * </p>
 * <p>
 * If -1 is used, the default compression of the zlib library is used which is 6.
 * </p>
 * @param int $encoding [optional] <p>
 * One of <b>ZLIB_ENCODING_*</b> constants.
 * </p>
 * @return string|false The compressed string or <b>FALSE</b> if an error occurred.
 */
#[Pure]
function gzcompress ($data, $level = -1, $encoding = ZLIB_ENCODING_DEFLATE) {}

/**
 * Uncompress a compressed string
 * @link https://php.net/manual/en/function.gzuncompress.php
 * @param string $data <p>
 * The data compressed by <b>gzcompress</b>.
 * </p>
 * @param int $max_length [optional] <p>
 * The maximum length of data to decode.
 * </p>
 * @return string|false The original uncompressed data or <b>FALSE</b> on error.
 * </p>
 * <p>
 * The function will return an error if the uncompressed data is more than
 * 32768 times the length of the compressed input <i>data</i>
 * or more than the optional parameter <i>length</i>.
 */
#[Pure]
function gzuncompress ($data, $max_length = 0) {}

/**
 * Deflate a string
 * @link https://php.net/manual/en/function.gzdeflate.php
 * @param string $data <p>
 * The data to deflate.
 * </p>
 * @param int $level [optional] <p>
 * The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression. If not given, the default compression level will
 * be the default compression level of the zlib library.
 * </p>
 * @param int $encoding [optional] <p>
 * One of <b>ZLIB_ENCODING_*</b> constants.
 * </p>
 * @return string|false The deflated string or <b>FALSE</b> if an error occurred.
 */
#[Pure]
function gzdeflate ($data, $level = -1, $encoding = ZLIB_ENCODING_RAW) {}

/**
 * Inflate a deflated string
 * @link https://php.net/manual/en/function.gzinflate.php
 * @param string $data <p>
 * The data compressed by <b>gzdeflate</b>.
 * </p>
 * @param int $max_length [optional] <p>
 * The maximum length of data to decode.
 * </p>
 * @return string|false The original uncompressed data or <b>FALSE</b> on error.
 * </p>
 * <p>
 * The function will return an error if the uncompressed data is more than
 * 32768 times the length of the compressed input <i>data</i>
 * or more than the optional parameter <i>length</i>.
 */
#[Pure]
function gzinflate ($data, $max_length = 0) {}

/**
 * Create a gzip compressed string
 * @link https://php.net/manual/en/function.gzencode.php
 * @param string $data <p>
 * The data to encode.
 * </p>
 * @param int $level [optional] <p>
 * The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression. If not given, the default compression level will
 * be the default compression level of the zlib library.
 * </p>
 * @param int $encoding [optional] <p>
 * The encoding mode. Can be <b>FORCE_GZIP</b> (the default)
 * or <b>FORCE_DEFLATE</b>.
 * </p>
 * <p>
 * Prior to PHP 5.4.0, using <b>FORCE_DEFLATE</b> results in
 * a standard zlib deflated string (inclusive zlib headers) after a gzip
 * file header but without the trailing crc32 checksum.
 * </p>
 * <p>
 * In PHP 5.4.0 and later, <b>FORCE_DEFLATE</b> generates
 * RFC 1950 compliant output, consisting of a zlib header, the deflated
 * data, and an Adler checksum.
 * </p>
 * @return string|false The encoded string, or <b>FALSE</b> if an error occurred.
 */
#[Pure]
function gzencode ($data, $level = -1, $encoding = FORCE_GZIP) {}

/**
 * Decodes a gzip compressed string
 * @link https://php.net/manual/en/function.gzdecode.php
 * @param string $data <p>
 * The data to decode, encoded by <b>gzencode</b>.
 * </p>
 * @param int $max_length [optional] <p>
 * The maximum length of data to decode.
 * </p>
 * @return string|false The decoded string, or <b>FALSE</b> if an error occurred.
 * @since 5.4
 */
#[Pure]
function gzdecode ($data, $max_length = null) {}

/**
 * Compress data with the specified encoding
 * @link https://php.net/manual/en/function.zlib-encode.php
 * @param string $data <p>
 * </p>
 * @param int $encoding <p>
 * </p>
 * @param int $level [optional] default -1 <p>
 * </p>
 * @return string
 * @since 5.4
 */
#[Pure]
function zlib_encode ($data, $encoding, $level) {}

/**
 * Uncompress any raw/gzip/zlib encoded data
 * @link https://php.net/manual/en/function.zlib-decode.php
 * @param string $data <p>
 * </p>
 * @param string $max_length [optional] <p>
 * </p>
 * @return string
 * @since 5.4
 */
#[Pure]
function zlib_decode ($data, $max_length = null) {}

/**
 * Returns the coding type used for output compression
 * @link https://php.net/manual/en/function.zlib-get-coding-type.php
 * @return string Possible return values are gzip, deflate,
 * or <b>FALSE</b>.
 */
#[Pure]
function zlib_get_coding_type () {}

/**
 * ob_start callback function to gzip output buffer
 * @link https://php.net/manual/en/function.ob-gzhandler.php
 * @param string $data
 * @param int $flags
 * @return string
 */
function ob_gzhandler ($data, $flags) {}

#[PhpStormStubsElementAvailable('8.0')]
/**
 * Initialize an incremental deflate context
 * @link https://php.net/manual/en/function.deflate-init.php
 * @param int $encoding <p>
 * One of the <b>ZLIB_ENCODING_*</b> constants.
 * </p>
 * @param array $options <p>
 * An associative array which may contain the following elements:
 * <b>level</b>The compression level in range -1..9; defaults to -1.
 * <b>memory</b>The compression memory level in range 1..9; defaults to 8.
 * <b>window</b>The zlib window size (logarithmic) in range 8..15; defaults
 * to 15. <b>strategy</b>One of <b>ZLIB_FILTERED</b>, <b>ZLIB_HUFFMAN_ONLY</b>,
 * <b>ZLIB_RLE</b>, <b>ZLIB_FIXED</b> or <b>ZLIB_DEFAULT_STRATEGY</b> (the
 * default). <b>dictionary</b>A string or an array of strings of the preset
 * dictionary (default: no preset dictionary).</p>
 * @return false|DeflateContext <p>
 * Returns a deflate context resource (zlib.deflate) on success, or
 * <b>FALSE</b> on failure.
 * </p>
 * @since 7.0
 */
#[Pure]
function deflate_init ($encoding, $options = array()) {}

#[PhpStormStubsElementAvailable('5.3','8.0')]
/**
 * Initialize an incremental deflate context
 * @link https://php.net/manual/en/function.deflate-init.php
 * @param int $encoding <p>
 * One of the <b>ZLIB_ENCODING_*</b> constants.
 * </p>
 * @param array $options <p>
 * An associative array which may contain the following elements:
 * <b>level</b>The compression level in range -1..9; defaults to -1.
 * <b>memory</b>The compression memory level in range 1..9; defaults to 8.
 * <b>window</b>The zlib window size (logarithmic) in range 8..15; defaults
 * to 15. <b>strategy</b>One of <b>ZLIB_FILTERED</b>, <b>ZLIB_HUFFMAN_ONLY</b>,
 * <b>ZLIB_RLE</b>, <b>ZLIB_FIXED</b> or <b>ZLIB_DEFAULT_STRATEGY</b> (the
 * default). <b>dictionary</b>A string or an array of strings of the preset
 * dictionary (default: no preset dictionary).</p>
 * @return resource|false <p>
 * Returns a deflate context resource (zlib.deflate) on success, or
 * <b>FALSE</b> on failure.
 * </p>
 * @since 7.0
 */
#[Pure]
function deflate_init ($encoding, $options = array()) {}

/**
 * Incrementally deflate data
 * @link https://php.net/manual/en/function.deflate-add.php
 * @param resource $context <p>
 * A context created with <b>deflate_init()</b>.
 * </p>
 * @param string $data <p>
 * A chunk of data to compress.
 * </p>
 * @param int $flush_mode [optional] <p>
 * One of <b>ZLIB_BLOCK</b>, <b>ZLIB_NO_FLUSH</b>, <b>ZLIB_PARTIAL_FLUSH</b>,
 * <b>ZLIB_SYNC_FLUSH</b> (default), <b>ZLIB_FULL_FLUSH</b>,
 * <b>ZLIB_FINISH</b>. Normally you will want to set <b>ZLIB_NO_FLUSH</b> to
 * maximize compression, and <b>ZLIB_FINISH</b> to terminate with
 * the last chunk of data.
 * </p>
 * @return string|false <p>
 * Returns a chunk of compressed data, or <b>FALSE</b> on failure.
 * </p>
 * @since 7.0
 */
function deflate_add ($context, $data, $flush_mode = ZLIB_SYNC_FLUSH) {}

#[PhpStormStubsElementAvailable('8.0')]
/**
 * Initialize an incremental inflate context
 * @link https://php.net/manual/en/function.inflate-init.php
 * @param int $encoding <p>
 * One of the ZLIB_ENCODING_* constants.
 * </p>
 * @param array $options [optional] <p>
 * An associative array which may contain the following elements:
 * <b>level</b>The compression level in range -1..9; defaults to -1.
 * <b>memory</b>The compression memory level in range 1..9; defaults to 8.
 * <b>window</b>The zlib window size (logarithmic) in range 8..15; defaults
 * to 15. <b>strategy</b>One of <b>ZLIB_FILTERED</b>, <b>ZLIB_HUFFMAN_ONLY</b>,
 * <b>ZLIB_RLE</b>, <b>ZLIB_FIXED</b> or <b>ZLIB_DEFAULT_STRATEGY</b> (the
 * default). <b>dictionary</b>A string or an array of strings of the preset
 * dictionary (default: no preset dictionary).</p>
 * @return false|InflateContext <p>
 * Returns an inflate context resource (zlib.inflate) on success, or
 * <b>FALSE</b> on failure.
 * </p>
 * @since 7.0
 */
#[Pure]
function inflate_init ($encoding, $options = array()) {}

#[PhpStormStubsElementAvailable('5.3','8.0')]
/**
 * Initialize an incremental inflate context
 * @link https://php.net/manual/en/function.inflate-init.php
 * @param int $encoding <p>
 * One of the ZLIB_ENCODING_* constants.
 * </p>
 * @param array $options [optional] <p>
 * An associative array which may contain the following elements:
 * <b>level</b>The compression level in range -1..9; defaults to -1.
 * <b>memory</b>The compression memory level in range 1..9; defaults to 8.
 * <b>window</b>The zlib window size (logarithmic) in range 8..15; defaults
 * to 15. <b>strategy</b>One of <b>ZLIB_FILTERED</b>, <b>ZLIB_HUFFMAN_ONLY</b>,
 * <b>ZLIB_RLE</b>, <b>ZLIB_FIXED</b> or <b>ZLIB_DEFAULT_STRATEGY</b> (the
 * default). <b>dictionary</b>A string or an array of strings of the preset
 * dictionary (default: no preset dictionary).</p>
 * @return resource|false <p>
 * Returns an inflate context resource (zlib.inflate) on success, or
 * <b>FALSE</b> on failure.
 * </p>
 * @since 7.0
 */
#[Pure]
function inflate_init ($encoding, $options = array()) {}

/**
 * Incrementally inflate encoded data
 * @link https://php.net/manual/en/function.inflate-add.php
 * @param resource $context <p>
 * A context created with <b>inflate_init()</b>.
 * </p>
 * @param string $data <p>
 * A chunk of compressed data.
 * </p>
 * @param int $flush_mode [optional] <p>
 * One of <b>ZLIB_BLOCK</b>, <b>ZLIB_NO_FLUSH</b>, <b>ZLIB_PARTIAL_FLUSH</b>,
 * <b>ZLIB_SYNC_FLUSH</b> (default), <b>ZLIB_FULL_FLUSH</b>,
 * <b>ZLIB_FINISH</b>. Normally you will want to set <b>ZLIB_NO_FLUSH</b> to
 * maximize compression, and <b>ZLIB_FINISH</b> to terminate with
 * the last chunk of data.
 * </p>
 * @return string|false <p>
 * Returns a chunk of uncompressed data, or <b>FALSE</b> on failure.
 * </p>
 * @since 7.0
 */
function inflate_add ($context, $data, $flush_mode = ZLIB_SYNC_FLUSH) {}

/**
 * Get number of bytes read so far
 * @param resource $context
 * @return bool
 * @since 7.2
 */
#[Pure]
function inflate_get_read_len ($context){}

/**
 * Get decompression status
 * @param resource $context
 * @return bool
 * @since 7.2
 */
#[Pure]
function  inflate_get_status($context) {}

/**
 * @since 8.0
 */
class InflateContext{
    /**
     * Use inflate_init() instead
     * @see inflate_init()
     */
    private function __construct(){}
}

/**
 * @since 8.0
 */
class DeflateContext{
    /**
     * Use deflate_init() instead
     * @see deflate_init()
     */
    private function __construct(){}
}

define ('FORCE_GZIP', 31);
define ('FORCE_DEFLATE', 15);
/** @link https://php.net/manual/en/zlib.constants.php */
define('ZLIB_ENCODING_RAW', -15);
/** @link https://php.net/manual/en/zlib.constants.php */
define('ZLIB_ENCODING_GZIP', 31);
/** @link https://php.net/manual/en/zlib.constants.php */
define('ZLIB_ENCODING_DEFLATE', 15);

define ('ZLIB_NO_FLUSH', 0);
define ('ZLIB_PARTIAL_FLUSH', 1);
define ('ZLIB_SYNC_FLUSH', 2);
define ('ZLIB_FULL_FLUSH', 3);
define ('ZLIB_BLOCK', 5);
define ('ZLIB_FINISH', 4);

define ('ZLIB_FILTERED', 1);
define ('ZLIB_HUFFMAN_ONLY', 2);
define ('ZLIB_RLE', 3);
define ('ZLIB_FIXED', 4);
define ('ZLIB_DEFAULT_STRATEGY', 0);
define ('ZLIB_OK', 0);
define ('ZLIB_STREAM_END', 1);
define ('ZLIB_NEED_DICT', 2);
define ('ZLIB_ERRNO', -1);
define ('ZLIB_STREAM_ERROR', -2);
define ('ZLIB_DATA_ERROR', -3);
define ('ZLIB_MEM_ERROR', -4);
define ('ZLIB_BUF_ERROR', -5);
define ('ZLIB_VERSION_ERROR', -6);


define ('ZLIB_VERSION', 'zlib_version_string'); // This is set to the zlib version
define ('ZLIB_VERNUM', 'zlib_version_string'); // This is set to the zlib version
