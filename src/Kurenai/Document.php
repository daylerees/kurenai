<?php

namespace Kurenai;

use dflydev\markdown\MarkdownParser;

class Document
{
    /**
     * The document body in Markdown format.
     *
     * @var string
     */
    private $content;

    /**
     * An array of document metadata.
     *
     * @var array
     */
    private $metadata = array();

    /**
     * Set the document content in Markdown format.
     *
     * @param  string
     * @return Document
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get the document content in Markdown format.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Get the document content in HTML format.
     *
     * @return string
     */
    public function getHtmlContent()
    {
        $markdownParser = new MarkdownParser();
        return $markdownParser->transformMarkdown($this->content);
    }

    /**
     * Set the document metadata using an array.
     *
     * @param  array $metadata
     * @return Document
     */
    public function set(array $metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * Add a piece of metadata to the document.
     *
     * @param  string $key
     * @param  mixed  $value
     * @return Document
     */
    public function add($key, $value)
    {
        $this->metadata[$key] = $value;
        return $this;
    }

    /**
     * Get metadata from the document.
     *
     * @param  string $key
     * @return mixed
     */
    public function get($key = null)
    {
        if (is_null($key)) return $this->metadata;
        if (! array_key_exists($key, $this->metadata)) return null;
        return $this->metadata[$key];
    }
}
