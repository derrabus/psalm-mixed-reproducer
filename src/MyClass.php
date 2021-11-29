<?php

namespace Derrabus\PsalmMixedReproducer;

use Symfony\Component\Cache\Adapter\ArrayAdapter;

class MyClass
{
    public function doSomething(): void
    {
        $cache = new ArrayAdapter();
        if (1 === $cache->getItem(__FUNCTION__)->get()) {
            echo 'hit';
        } else {
            echo 'miss';
        }
    }
}
