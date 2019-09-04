<?php

namespace Kurenai\Parsers\Content;

use Netcarver\Textile\Parser;
use Kurenai\Contracts\ContentParser;

/**
 * Class TextileParser
 *
 * @package \Kurenai\Parsers\Content
 */
class TextileParser implements ContentParser
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
        return (new Parser)->parse($content);
    }
}
