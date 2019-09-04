<?php

use Kurenai\Parsers\Metadata\IniParser;
use PHPUnit\Framework\TestCase;

class IniParserTest extends TestCase
{
    public function test_ini_parser_can_be_created()
    {
        $p = new IniParser;
        $this->assertInstanceOf(IniParser::class, $p);
    }

    public function test_ini_parser_can_parse_ini_format()
    {
        $p = new IniParser();
        $v = $p->parse('foo=bar');
        $this->assertIsArray($v);
        $this->assertArrayHasKey('foo', $v);
        $this->assertEquals('bar', $v['foo']);
    }
}
