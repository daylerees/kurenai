<?php

namespace Kurenai\Contracts;

/**
 * Interface MetadataParser
 *
 * @package Kurenai\Contracts
 */
interface MetadataParser
{
    /**
     * Parse raw metadata into new format.
     *
     * @param string $metadata
     *
     * @return array
     */
    public function parse($metadata);
}
