<?php

use PHPUnit\Framework\TestCase;
use Kurenai\Parsers\Metadata\YamlParser;

class YamlParserTest extends TestCase
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
        $this->assertIsArray($v);
        $this->assertArrayHasKey('foo', $v);
        $this->assertEquals('bar', $v['foo']);
    }
}
