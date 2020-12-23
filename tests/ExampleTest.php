<?php

namespace Trapzpro\TradingTracker\Tests;

use Orchestra\Testbench\TestCase;
use Trapzpro\TradingTracker\TradingTrackerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TradingTrackerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
