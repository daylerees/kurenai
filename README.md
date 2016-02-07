[![Kurenai](kurenai.png)](https://github.com/daylerees/kurenai)

# Kurenai

[![Build Status](https://travis-ci.org/daylerees/kurenai.svg?branch=master)](https://travis-ci.org/daylerees/kurenai)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/daylerees/kurenai/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/daylerees/kurenai/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/daylerees/kurenai/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/daylerees/kurenai/?branch=master)
[![Code Climate](https://codeclimate.com/github/daylerees/kurenai/badges/gpa.svg)](https://codeclimate.com/github/daylerees/kurenai)
[![HHVM Tested](https://img.shields.io/hhvm/daylerees/kurenai.svg)](https://travis-ci.org/daylerees/kurenai)

[![Packagist Version](https://img.shields.io/packagist/v/daylerees/kurenai.svg)](https://packagist.org/packages/daylerees/kurenai)
[![Packagist](https://img.shields.io/packagist/dt/daylerees/kurenai.svg)](https://packagist.org/packages/daylerees/kurenai)

Kurenai is a document with metadata parsing library for PHP. It supports a variety of different document content and metadata parsers.

---

## Installation

Kurenai is available on [Packagist](https://packagist.org/packages/daylerees/kurenai) for [Composer](https://getcomposer.org/).

    composer require daylerees/kurenai
    
## Usage

Kurenai documents look like this:

```
Some form of metadata here.
===
Some form of content here.
```

A metadata section, and a content section seperated by three equals `===` signs or more.

Here's an example using JSON for metadata, and Markdown for content.

```
{
    "title": "Hello world!"
}
===
# Hello World

Well hello there, world!
```

Formats for metadata and content are interchangable using classes called parsers. First, let's create our parser instance.

```php
$kurenai = new \Kurenai\Parser(
    new \Kurenai\Parsers\Metadata\JsonParser,
    new \Kurenai\Parsers\Content\MarkdownParser
);
```

In the above example, we're using a JSON metadata parser, and a Markdown content parser. We can now parse a document.

```php
$document = $kurenai->parse('path/to/document.md');
```

Our documents can have any filename or extension. You can also pass the `parse()` function the content of a document directly.

The document instance has a few useful methods.

```php
$document->getRaw();
```

This will fetch the raw document content. Before Kurenai parsed it.

```php
$document->getMetadata();
```

This will fetch the metadata, parsed into an array.

```php
$document->getContent();
```

This will get the content of the document, rendered using the provided content parser.

```php
$document->get('foo.bar');
```

The `get()` method uses dot-notation to return a metadata value. For example, the above example would be equivalent to fetching `$metadata['foo']['bar']`.

If the subject can't be found, `null` will be returned. You can supply a default value as a second parameter to the method.

## Metadata Parsers

| Format | Install Package | Class                                |
|--------|-----------------|--------------------------------------|
| JSON   | N/A             | `Kurenai\Parsers\Metdata\JsonParser` |
| YAML   | `symfony/yaml`  | `Kurenai\Parsers\Metdata\YamlParser` |

## Content Parsers

| Format                      | Install Package        | Class                                         |
|-----------------------------|------------------------|-----------------------------------------------|
| Plaintext (no parsing)      | N/A                    | `Kurenai\Parsers\Content\PlaintextParser`     |
| Markdown                    | `michelf/php-markdown` | `Kurenai\Parsers\Content\MarkdownParser`      |
| Markdown Extra              | `michelf/php-markdown` | `Kurenai\Parsers\Content\MarkdownExtraParser` |
| Parsedown (Github Markdown) | `erusev/parsedown`     | `Kurenai\Parsers\Content\ParsedownParser`     |
| Textile                     | `netcarver/textile`    | `Kurenai\Parsers\Content\TextileParser`       |

Enjoy using Kurenai!

