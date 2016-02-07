<?php

namespace Kurenai\Parsers\Metadata;

use Kurenai\Contracts\MetadataParser;

/**
 * Class JsonParser
 *
 * @package \Kurenai\Parsers\Metadata
 */
class JsonParser implements MetadataParser
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
        return json_decode($metadata, true);
    }
}
