<?php

use Kurenai\Document;
use Kurenai\Parser\DflydevMarkdown;
use Kurenai\Parser\DflydevMarkdownExtra;

class DflydevParserTest extends PHPUnit_Framework_TestCase
{
    public function testDocumentHtmlContentCanBeReturned()
    {
        $d = new Document(new DflydevMarkdown);
        $d->setContent('Foo **Bar** Baz');
        $e = "<p>Foo <strong>Bar</strong> Baz</p>\n";
        $this->assertEquals($e, $d->getHtmlContent());
    }

    public function testDocumentCanParseExtraMarkdown()
    {
        $document = new Document(new DflydevMarkdownExtra);
        $document->setContent("~~~\nCode Block\n~~~");
        $expected = "<pre><code>Code Block\n</code></pre>\n";
        $this->assertEquals($expected, $document->getHtmlContent(true));
    }
}
