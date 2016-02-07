<?php

use Kurenai\Parsers\Metadata\JsonParser;

class JsonParserTest extends PHPUnit_Framework_TestCase
{
    public function test_json_parser_can_be_created()
    {
        $p = new JsonParser;
        $this->assertInstanceOf(JsonParser::class, $p);
    }

    public function test_json_parser_can_parse_json()
    {
        $p = new JsonParser;
        $v = $p->parse('{"foo":"bar"}');
        $this->assertInternalType('array', $v);
        $this->assertArrayHasKey('foo', $v);
        $this->assertEquals('bar', $v['foo']);
    }
}
