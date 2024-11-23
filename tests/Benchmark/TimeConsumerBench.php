<?php

namespace Acme\Tests\Benchmark;

use Acme\TimeConsumer;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;

class TimeConsumerBench
{
    #[Revs(1000)]
    #[Iterations(5)]
    public function benchTime(): void
    {
        $consumer = new TimeConsumer();
        $consumer->consume();
    }
}
