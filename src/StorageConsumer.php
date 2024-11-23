<?php

namespace Acme;

class StorageConsumer
{
    public function consume()
    {
        $x = range(1,10000);
        shuffle($x);
        $y = $x;
        $x = 0;
        foreach ($y as $number) {
            $x = $x + $number;
        }
    }
}
