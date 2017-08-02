<?php

/*
 * This file is part of Laravel Settings.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Settings\Store;

class MemoryStore extends Store
{
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    protected function read()
    {
        return $this->data;
    }

    protected function write(array $data)
    {
    }
}
