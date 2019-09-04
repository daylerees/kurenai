<?php

use Kurenai\Parsers\Content\ParsedownParser;
use PHPUnit\Framework\TestCase;

class ParsedownParserTest extends TestCase
{
    public function test_parsedown_parser_can_be_created()
    {
        $p = new ParsedownParser;
        $this->assertInstanceOf(ParsedownParser::class, $p);
    }

    public function test_parsedown_parser_can_parse_markdown_content()
    {
        $p = new ParsedownParser;
        $c = '**Hello** *world*.';
        $v = $p->parse($c);
        $this->assertEquals('<p><strong>Hello</strong> <em>world</em>.</p>', $v);
    }
}
