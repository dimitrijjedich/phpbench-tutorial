<?php

namespace Acme\Tests\Benchmark;

use Acme\StorageConsumer;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;

class StorageConsumerBench
{
    #[Revs(1000)]
    #[Iterations(5)]
    public function benchStorage(): void
    {
        $consumer = new StorageConsumer();
        $consumer->consume();
    }
}
