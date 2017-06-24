<?php

namespace EmoG\Phalcon\Auth\TokenGetter;

/**
 * EmoG\Phalcon\Auth\TokenGetter\TokenGetter.
 */
interface AdapterInterface
{
    /**
     * Gets JWT and returns it.
     *
     * @return string
     */
    public function parse();
}