<?php

namespace Trapzpro\TradingTracker;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Trapzpro\TradingTracker\Skeleton\SkeletonClass
 */
class TradingTrackerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'trading-tracker';
    }
}
