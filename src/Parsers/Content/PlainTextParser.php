<?php

namespace Kurenai\Parsers\Content;

use Kurenai\Contracts\ContentParser;

/**
 * Class PlainTextParser
 *
 * @package \Kurenai\Parsers\Content
 */
class PlainTextParser implements ContentParser
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
        return $content;
    }
}
