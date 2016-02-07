<?php

namespace Kurenai\Parsers\Metadata;

use Symfony\Component\Yaml\Yaml;
use Kurenai\Contracts\MetadataParser;

/**
 * Class YamlParser
 *
 * @package \Kurenai\Parsers\Metadata
 */
class YamlParser implements MetadataParser
{
    /**
     * Parse raw metadata into new format.
     *
     * @param string $metadata
     *
     * @return array
     */
    public function parse($metadata)
    {
        return Yaml::parse($metadata);
    }
}
