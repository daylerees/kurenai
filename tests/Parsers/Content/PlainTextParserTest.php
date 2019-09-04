<?php

use Kurenai\Parsers\Content\PlainTextParser;
use PHPUnit\Framework\TestCase;

class PlainTextParserTest extends TestCase
{
    public function test_plain_text_parser_can_be_created()
    {
        $p = new PlainTextParser;
        $this->assertInstanceOf(PlainTextParser::class, $p);
    }

    public function test_plain_text_parser_can_parse_plain_text_content()
    {
        $p = new PlainTextParser;
        $c = 'Hello world.';
        $v = $p->parse($c);
        $this->assertEquals('Hello world.', $v);
    }
}
