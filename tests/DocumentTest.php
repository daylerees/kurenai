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

    public function testDocumentHtmlContentCanBeReturned()
    {
        $d = new Document();
        $d->setContent('Foo **Bar** Baz');
        $e = "<p>Foo <strong>Bar</strong> Baz</p>\n";
        $this->assertEquals($e, $d->getHtmlContent());
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
}
