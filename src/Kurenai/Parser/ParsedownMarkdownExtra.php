<?php namespace Kurenai\Parser;

use Kurenai\MarkdownParserInterface;
use ParsedownExtra;

class ParsedownMarkdownExtra extends ParsedownExtra implements MarkdownParserInterface
{
    public function render($content)
    {
        return $this->text($content);
    }
}
