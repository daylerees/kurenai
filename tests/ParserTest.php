<?php

use Kurenai\Parser;
use Kurenai\Document;
use PHPUnit\Framework\TestCase;
use Kurenai\Parsers\Metadata\JsonParser;
use Kurenai\Parsers\Content\PlainTextParser;

class ParserTest extends TestCase
{
    public function test_parser_can_be_created()
    {
        $p = new Parser(new JsonParser, new PlainTextParser);
        $this->assertInstanceOf(Parser::class, $p);
    }

    public function test_parser_can_parse_document_from_string()
    {
        $s = file_get_contents(__DIR__ . '/stubs/document1.txt');
        $p = new Parser(new JsonParser, new PlainTextParser);
        $d = $p->parse($s);
        $this->assertInstanceOf(Document::class, $d);
        $this->assertEquals($s, $d->getRaw());
        $this->assertEquals('bar', $d->getMetadata()['foo']);
        $this->assertEquals('This is some content!', $d->getContent());
    }

    public function test_parser_can_parse_document_from_file()
    {
        $p = new Parser(new JsonParser, new PlainTextParser);
        $d = $p->parse(__DIR__ . '/stubs/document1.txt');
        $this->assertInstanceOf(Document::class, $d);
    }
}
