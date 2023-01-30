<?php

namespace Atef\LivewirePasswordMeter\Tests;

use Atef\LivewirePasswordMeter\Tests\TestCase;


class ExampleTest extends TestCase
{
    public function test_true_is_true()
    {
        return $this->get('/z')->assertSee('OK');
    }
}
