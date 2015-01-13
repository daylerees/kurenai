<?php

use Kurenai\Document;
use Kurenai\Parser\CommonMark;

class CommonMarkTest extends \PHPUnit_Framework_TestCase
{
    public function testDocumentHtmlContentCanBeReturned()
    {
        $d = new Document(new CommonMark);
        $d->setContent('Foo **Bar** Baz');
        $e = "<p>Foo <strong>Bar</strong> Baz</p>\n";
        $this->assertEquals($e, $d->getHtmlContent());
    }
}
