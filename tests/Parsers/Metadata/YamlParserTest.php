<?php

use Kurenai\Parsers\Metadata\YamlParser;

class YamlParserTest extends PHPUnit_Framework_TestCase
{
    public function test_yaml_parser_can_be_created()
    {
        $p = new YamlParser;
        $this->assertInstanceOf(YamlParser::class, $p);
    }

    public function test_yaml_parser_can_parse_yaml()
    {
        $p = new YamlParser;
        $v = $p->parse('foo: bar');
        $this->assertInternalType('array', $v);
        $this->assertArrayHasKey('foo', $v);
        $this->assertEquals('bar', $v['foo']);
    }
}
