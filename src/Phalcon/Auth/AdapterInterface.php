<?php

namespace EmoG\Phalcon\Auth;

use EmoG\Phalcon\Auth\TokenGetter\AdapterInterface as TokenGetter;

/**
 * EmoG\Phalcon\Auth\AdapterInterface.
 */
interface AdapterInterface
{
    /**
     * Encodes array into JWT.
     *
     * @param array $payload
     * @param string $key
     *
     * @return string
     */
    public function make(array $payload, $key);

    /**
     * Checks and validates JWT.
     *
     * @param EmoG\Phalcon\Auth\TokenGetter\AdapterInterface $parser
     * @param string $key
     *
     * @return bool
     */
    public function check(TokenGetter $parser, $key);
}