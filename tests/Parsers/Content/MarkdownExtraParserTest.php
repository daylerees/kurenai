<?php

use Kurenai\Parsers\Content\MarkdownExtraParser;

class MarkdownExtraParserTest extends PHPUnit_Framework_TestCase
{
    public function test_markdown_extra_parser_can_be_created()
    {
        $p = new MarkdownExtraParser;
        $this->assertInstanceOf(MarkdownExtraParser::class, $p);
    }

    public function test_markdown_extra_parser_can_parse_markdown_content()
    {
        $p = new MarkdownExtraParser;
        $c = '**Hello** *world*.';
        $v = $p->parse($c);
        $this->assertEquals("<p><strong>Hello</strong> <em>world</em>.</p>\n", $v);
    }
}
