<?php

namespace Kurenai\Parser;

use Kurenai\MarkdownParserInterface;
use Parsedown;

class ParsedownMarkdown extends Parsedown implements MarkdownParserInterface
{
    public function render($content)
    {
        return $this->text($content);
    }
}
