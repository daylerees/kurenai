<?php

namespace Kurenai;

use Illuminate\Support\Arr;

/**
 * Class Document
 *
 * @package \Kurenai
 */
class Document
{
    /**
     * Raw document content.
     *
     * @var string
     */
    protected $raw;

    /**
     * Document metadata.
     *
     * @var mixed
     */
    protected $metadata;

    /**
     * Document content.
     *
     * @var string
     */
    protected $content;

    /**
     * Document constructor.
     *
     * @param string $raw
     * @param mixed  $metdata
     * @param string $content
     */
    public function __construct($raw, $metdata, $content)
    {
        $this->raw      = $raw;
        $this->metadata = $metdata;
        $this->content  = $content;
    }

    /**
     * Get the raw document.
     *
     * @return string
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * Get the document metadata.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Get the document content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Get a metadata value using dot notation.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        return Arr::get($this->metadata, $key, $default);
    }
}
