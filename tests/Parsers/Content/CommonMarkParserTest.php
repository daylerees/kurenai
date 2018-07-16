<?php

use PHPUnit\Framework\TestCase;
use Kurenai\Parsers\Content\CommonMarkParser;

class CommonMarkParserTest extends TestCase
{
    public function test_commonmark_parser_can_be_created()
    {
        $parser = new CommonMarkParser();

        $this->assertInstanceOf(CommonMarkParser::class, $parser);
    }

    public function test_markdown_extra_parser_can_parse_markdown_content()
    {
        $parser = new CommonMarkParser();

        $markdown = '**Hello** *world*.';

        $string = $parser->parse($markdown);

        $this->assertEquals("<p><strong>Hello</strong> <em>world</em>.</p>\n", $string);
    }
}
