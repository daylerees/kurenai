<?php

namespace Kurenai;

use Kurenai\Contracts\ContentParser;
use Kurenai\Contracts\MetadataParser;

/**
 * Class Parser
 *
 * @package \Kurenai
 */
class Parser
{
    /**
     * Regular expression to split content from metadata.
     *
     * @var string
     */
    protected $pattern = '/\s+={3,}\s+/';

    /**
     * The metadata parser instance.
     *
     * @var \Kurenai\Contracts\MetadataParser
     */
    protected $metadataParser;

    /**
     * The content parser instance.
     *
     * @var \Kurenai\Contracts\ContentParser
     */
    protected $contentParser;

    /**
     * Inject the parser instances.
     *
     * @param \Kurenai\Contracts\MetadataParser $metadataParser
     * @param \Kurenai\Contracts\ContentParser  $contentParser
     */
    public function __construct(MetadataParser $metadataParser, ContentParser $contentParser)
    {
        $this->metadataParser = $metadataParser;
        $this->contentParser  = $contentParser;
    }

    /**
     * Parse a document from string or file path.
     *
     * @param string $path
     *
     * @return void
     */
    public function parse($path)
    {
        $rawDocument = $this->loadDocument($path);
        list($rawMetadata, $rawContent) = $this->splitDocument($rawDocument);
        return $this->createDocument($rawDocument, $rawMetadata, $rawContent);
    }

    /**
     * Load raw content of document.
     *
     * @param string $path
     *
     * @return string
     */
    protected function loadDocument($path)
    {
        if (!file_exists($path)) {
            return $path;
        }

        return file_get_contents($path);
    }

    /**
     * Split a document into content and metadata.
     *
     * @param string $rawDocument
     *
     * @return array
     */
    protected function splitDocument($rawDocument)
    {
        return preg_split($this->pattern, $rawDocument, 2);
    }

    /**
     * Create a new parsed document instance.
     *
     * @param string $raw
     * @param string $rawMetadata
     * @param string $rawContent
     *
     * @return \Kurenai\Document
     */
    protected function createDocument($raw, $rawMetadata, $rawContent)
    {
        return new Document(
            $raw,
            $this->parseMetadata(trim($rawMetadata)),
            $this->parseContent(trim($rawContent))
        );
    }

    /**
     * Parse metadata from raw metadata.
     *
     * @param string $rawMetadata
     *
     * @return mixed
     */
    protected function parseMetadata($rawMetadata)
    {
        return $this->metadataParser->parse($rawMetadata);
    }

    /**
     * Parse content from raw content.
     *
     * @param string $rawContent
     *
     * @return string
     */
    protected function parseContent($rawContent)
    {
        return $this->contentParser->parse($rawContent);
    }
}
