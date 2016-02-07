<?php

namespace Kurenai\Parsers\Content;

use Parsedown;
use Kurenai\Contracts\ContentParser;

/**
 * Class ParsedownParser
 *
 * @package \Kurenai\Parsers\Content
 */
class ParsedownParser implements ContentParser
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
        return (new Parsedown)->text($content);
    }
}
