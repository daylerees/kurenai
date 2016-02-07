<?php

use Kurenai\Document;

class DocumentTest extends PHPUnit_Framework_TestCase
{
    public function test_document_can_be_created()
    {
        $d = new Document('foo', 'bar', 'baz');
        $this->assertInstanceOf(Document::class, $d);
    }

    public function test_document_can_hold_raw_data()
    {
        $d = new Document('foo', 'bar', 'baz');
        $this->assertEquals('foo', $d->getRaw());
    }

    public function test_document_can_hold_metadata()
    {
        $d = new Document('foo', 'bar', 'baz');
        $this->assertEquals('bar', $d->getMetadata());
    }

    public function test_document_can_hold_content()
    {
        $d = new Document('foo', 'bar', 'baz');
        $this->assertEquals('baz', $d->getContent());
    }

    public function test_document_can_fetch_metadata_by_dot_notation()
    {
        $d = new Document('foo', ['foo' => ['bar' => 'baz']], 'baz');
        $this->assertEquals('baz', $d->get('foo.bar'));
    }

    public function test_document_can_fetch_metadata_by_dot_notation_with_default_value()
    {
        $d = new Document('foo', [], 'baz');
        $this->assertEquals('boo', $d->get('foo.bar', 'boo'));
    }
}
