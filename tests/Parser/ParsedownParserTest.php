<?php

use Kurenai\Document;
use Kurenai\Parser\ParsedownMarkdown;
use Kurenai\Parser\ParsedownMarkdownExtra;

class ParsedownParserTest extends PHPUnit_Framework_TestCase
{
    public function testDocumentHtmlContentCanBeReturned()
    {
        $d = new Document(new ParsedownMarkdown);
        $d->setContent('Foo **Bar** Baz');
        $e = "<p>Foo <strong>Bar</strong> Baz</p>";
        $this->assertEquals($e, $d->getHtmlContent());
    }

    public function testDocumentCanParseExtraMarkdown()
    {
        $document = new Document(new ParsedownMarkdownExtra);
        $document->setContent("~~~\nCode Block\n~~~");
        $expected = "<pre><code>Code Block\n</code></pre>";
        $this->assertEquals($expected, $document->getHtmlContent(true));
    }
}
