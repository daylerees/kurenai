<?php

namespace Kurenai\Parsers\Metadata;

use Kurenai\Contracts\MetadataParser;

/**
 * Class IniParser
 *
 * @package \Kurenai\Parsers\Metadata
 */
class IniParser implements MetadataParser
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
        return parse_ini_string($metadata);
    }
}
