<?php

namespace Kurenai\Parsers\Content;

use Kurenai\Contracts\ContentParser;
use League\CommonMark\CommonMarkConverter;

class CommonMarkParser implements ContentParser
{
    /**
     * @param string $markdown
     * @return string
     */
    public function parse($markdown)
    {
        return (new CommonMarkConverter())->convertToHtml($markdown);
    }
}
