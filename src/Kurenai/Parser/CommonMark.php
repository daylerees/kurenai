<?php

namespace Kurenai\Parser;

use Kurenai\MarkdownParserInterface;
use League\CommonMark\CommonMarkConverter;

class CommonMark extends CommonMarkConverter implements MarkdownParserInterface
{
    public function render($content)
    {
        return $this->convertToHtml($content);
    }
}
