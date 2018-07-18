<?php

namespace Kurenai\Parsers\Content;

use League\CommonMark\CommonMarkConverter;

class CommonMarkParser
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
