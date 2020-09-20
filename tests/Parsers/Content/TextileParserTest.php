<?php

use PHPUnit\Framework\TestCase;
use Kurenai\Parsers\Content\TextileParser;

class TextileParserTest extends TestCase
{
    public function test_textile_parser_can_be_created()
    {
        $p = new TextileParser;
        $this->assertInstanceOf(TextileParser::class, $p);
    }

    public function test_textile_parser_can_parse_textile_content()
    {
        $p = new TextileParser;
        $c = 'h1. Hello World';
        $v = $p->parse($c);
        $this->assertEquals('<h1>Hello World</h1>', $v);
    }
}
