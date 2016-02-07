<?php

namespace Kurenai\Parsers\Content;

use Michelf\Markdown;
use Kurenai\Contracts\ContentParser;

/**
 * Class MarkdownParser
 *
 * @package \Kurenai\Parsers\Content
 */
class MarkdownParser implements ContentParser
{
    /**
     * Parse raw content into new format.
     *
     * @param string $content
     *
     * @return string
     */
    public function parse($content)
    {
        return Markdown::defaultTransform($content);
    }
}
