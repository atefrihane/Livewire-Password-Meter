<?php

namespace VendorName\Skeleton\Tests;

use VendorName\Skeleton\Tests\TestCase;


class ExampleTest extends TestCase
{
    public function test_true_is_true()
    {
        return $this->get('/')
            ->assertOk();
       
    }
}
