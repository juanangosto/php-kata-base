<?php

declare(strict_types=1);

namespace Tests;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    public function testDummy()
    {
        $kata = new Kata();
        $this->isInstanceOf(Kata::class);
    }
}
