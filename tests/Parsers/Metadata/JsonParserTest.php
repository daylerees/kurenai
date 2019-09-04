<?php

use Kurenai\Parsers\Metadata\JsonParser;
use PHPUnit\Framework\TestCase;

class JsonParserTest extends TestCase
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
        $this->assertIsArray($v);
        $this->assertArrayHasKey('foo', $v);
        $this->assertEquals('bar', $v['foo']);
    }
}
