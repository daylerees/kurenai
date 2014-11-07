<?php

use Kurenai\Document;

class DocumentTest extends PHPUnit_Framework_TestCase
{
    public function testDocumentCanBeCreated()
    {
        $d = new Document();
        $this->assertTrue($d instanceof Document);
    }

    public function testDocumentContentCanBeSet()
    {
        $d = new Document();
        $d->setContent('Foo');
        $this->assertEquals('Foo', $d->getContent());
    }

    public function testDocumentMetadataCanBeSet()
    {
        $d = new Document();
        $d->set(array('Foo' => 'Bar'));
        $this->assertCount(1, $d->get());
        $this->assertEquals('Bar', $d->get('Foo'));
        $this->assertEquals(array('Foo' => 'Bar'), $d->get());
    }

    public function testDocumentMetadataCanBeAdded()
    {
        $d = new Document();
        $d->add('Foo', 'Bar');
        $this->assertCount(1, $d->get());
        $this->assertEquals('Bar', $d->get('Foo'));
        $this->assertEquals(array('Foo' => 'Bar'), $d->get());
        $d->add('Baz', 'Boo');
        $this->assertCount(2, $d->get());
        $this->assertEquals('Bar', $d->get('Foo'));
        $this->assertEquals('Boo', $d->get('Baz'));
        $this->assertEquals(array('Foo' => 'Bar', 'Baz' => 'Boo'), $d->get());
    }

    public function testDocumentCanUseCustomParser()
    {
        $document = new Document(new ParserStub());
        $this->assertEquals('Rendered content.', $document->getHtmlContent());
    }
}

/**
 * This class should be a stub implementation for the MarkdownParserInterface.
 */
class ParserStub implements \Kurenai\MarkdownParserInterface
{
    public function render($content)
    {
        return 'Rendered content.';
    }
}
