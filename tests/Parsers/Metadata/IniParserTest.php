<?php

use Kurenai\Parsers\Metadata\IniParser;

class IniParserTest extends PHPUnit_Framework_TestCase
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
        $this->assertInternalType('array', $v);
        $this->assertArrayHasKey('foo', $v);
        $this->assertEquals('bar', $v['foo']);
    }
}
