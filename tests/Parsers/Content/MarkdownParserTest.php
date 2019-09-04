<?php

use Kurenai\Parsers\Content\MarkdownParser;
use PHPUnit\Framework\TestCase;

class MarkdownParserTest extends TestCase
{
    public function test_markdown_parser_can_be_created()
    {
        $p = new MarkdownParser;
        $this->assertInstanceOf(MarkdownParser::class, $p);
    }

    public function test_markdown_parser_can_parse_markdown_content()
    {
        $p = new MarkdownParser;
        $c = '**Hello** *world*.';
        $v = $p->parse($c);
        $this->assertEquals("<p><strong>Hello</strong> <em>world</em>.</p>\n", $v);
    }
}
