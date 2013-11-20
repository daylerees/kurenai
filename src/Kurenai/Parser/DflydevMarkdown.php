<?php

namespace Kurenai\Parser;

use Kurenai\MarkdownParserInterface;
use dflydev\markdown\MarkdownParser;

class DflydevMarkdown extends MarkdownParser implements MarkdownParserInterface
{
    public function render($content)
    {
        return $this->transformMarkdown($content);
    }
}
