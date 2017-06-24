<?php

namespace EmoG\Phalcon\Auth\TokenGetter;

use EmoG\Phalcon\Auth\TokenGetter\AdapterInterface;

/**
 * EmoG\Phalcon\Auth\TokenGetter\TokenGetter.
 */
class TokenGetter implements AdapterInterface
{
    // TokenGetters
    protected $getters = [];

    /**
     * Sets getters.
     *
     * @param EmoG\Phalcon\Auth\TokenGetter\AdapterInterface $getters
     */
    public function __construct(AdapterInterface ...$getters)
    {
        $this->getters = $getters;
    }

    /**
     * Calls the getters parser and returns the token
     *
     * @return string
     */
    public function parse()
    {
        foreach ($this->getters as $getter) {
            $token = $getter->parse();
            if ($token) {
                return $token;
            }
        }
        return '';
    }
}