<?php

/*
 * This file is part of the Ivory Http Adapter package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\HttpAdapter\Message\Stream;

use Psr\Http\Message\StreamInterface;

/**
 * Abstract stream.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
abstract class AbstractStream implements StreamInterface
{
    /**
     * Destructs the stream.
     */
    public function __destruct()
    {
        $this->close();
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        if (!$this->hasValue()) {
            return false;
        }

        return $this->doClose();
    }

    /**
     * {@inheritdoc}
     */
    public function detach()
    {
        return $this->hasValue() ? $this->doDetach() : false;
    }

    /**
     * {@inheritdoc}
     */
    public function eof()
    {
        return $this->isReadable() && $this->doEof();
    }

    /**
     * {@inheritdoc}
     */
    public function tell()
    {
        return $this->hasValue() ? $this->doTell() : false;
    }

    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
        return $this->hasValue() ? $this->doGetSize() : false;
    }

    /**
     * {@inheritdoc}
     */
    public function isSeekable()
    {
        return $this->hasValue() && $this->doIsSeekable();
    }

    /**
     * {@inheritdoc}
     */
    public function seek($offset, $whence = SEEK_SET)
    {
        return $this->isSeekable() ? $this->doSeek($offset, $whence) : false;
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable()
    {
        return $this->hasValue() && $this->doIsReadable();
    }

    /**
     * {@inheritdoc}
     */
    public function read($length)
    {
        return $this->isReadable() ? $this->doRead($length) : false;
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable()
    {
        return $this->hasValue() && $this->doIsWritable();
    }

    /**
     * {@inheritdoc}
     */
    public function write($string)
    {
        return $this->isWritable() ? $this->doWrite($string) : false;
    }

    /**
     * {@inheritdoc}
     */
    public function getContents($maxLength = -1)
    {
        return $this->isReadable() ? $this->doGetContents($maxLength) : false;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->isReadable() && ($this->isSeekable() || !$this->eof()) ? $this->doToString() : '';
    }

    /**
     * Checks if there is a value.
     *
     * @return boolean TRUE if there is a value else FALSE.
     */
    abstract protected function hasValue();

    /**
     * Does the close.
     *
     * @return boolean TRUE if it is done else FALSE.
     */
    abstract protected function doClose();

    /**
     * Does the detach.
     *
     * @return boolean TRUE if it is done else FALSE.
     */
    abstract protected function doDetach();

    /**
     * Does the eof.
     *
     * @return boolean TRUE if it is the eof else FALSE.
     */
    abstract protected function doEof();

    /**
     * Does the tell.
     *
     * @return integer|boolean The cursor position or FALSE if an error occurred.
     */
    abstract protected function doTell();

    /**
     * Does the get size.
     *
     * @return integer|boolean The size of FALSE if an error occurred.
     */
    abstract protected function doGetSize();

    /**
     * Does the is seekable.
     *
     * @return boolean TRUE if it is seekable else FALSE.
     */
    abstract protected function doIsSeekable();

    /**
     * Does the seek.
     *
     * @param integer $offset The offset.
     * @param integer $whence The whence flag.
     *
     * @return boolean TRUE if it is done else FALSE.
     */
    abstract protected function doSeek($offset, $whence);

    /**
     * Does the is readable.
     *
     * @return boolean TRUE if it is readable else FALSE.
     */
    abstract protected function doIsReadable();

    /**
     * Does the read.
     *
     * @param integer $length The length.
     *
     * @return string|boolean The readed string or FALSE if an error occurred.
     */
    abstract protected function doRead($length);

    /**
     * Does the is writable.
     *
     * @return boolean TRUE if it is writable else FALSE.
     */
    abstract protected function doIsWritable();

    /**
     * Does the write.
     *
     * @param string $string The string.
     *
     * @return integer|boolean The number of bytes written or FALSE if an error occurred.
     */
    abstract protected function doWrite($string);

    /**
     * Does the get contents.
     *
     * @param integer $maxLength The max length.
     *
     * @return string|boolean The contents or FALSE if an error occurred.
     */
    abstract protected function doGetContents($maxLength);

    /**
     * Does the to string.
     *
     * @return string The string.
     */
    abstract protected function doToString();
}
