<?php

namespace Kurenai\Contracts;

/**
 * Interface ContentParser
 *
 * @package Kurenai\Contracts
 */
interface ContentParser
{
    /**
     * Parse raw content into new format.
     *
     * @param string $content
     *
     * @return string
     */
    public function parse($content);
}
