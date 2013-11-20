<?php

namespace Kurenai\Parser;

use Kurenai\MarkdownParserInterface;
use dflydev\markdown\MarkdownExtraParser;

class DflydevMarkdownExtra extends MarkdownExtraParser implements MarkdownParserInterface
{
    public function render($content)
    {
        return $this->transformMarkdown($content);
    }
}
