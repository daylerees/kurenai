<?php

namespace Kurenai\Parsers\Content;

use Michelf\MarkdownExtra;
use Kurenai\Contracts\ContentParser;

/**
 * Class MarkdownExtraParser
 *
 * @package \Kurenai\Parsers\Content
 */
class MarkdownExtraParser implements ContentParser
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
        return MarkdownExtra::defaultTransform($content);
    }
}
