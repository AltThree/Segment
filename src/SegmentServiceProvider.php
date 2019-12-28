<?php

declare(strict_types=1);

/*
 * This file is part of Alt Three Segment.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Segment;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
use Segment;

/**
 * This is the segment service provider class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class SegmentServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();

        if ($writeKey = $this->app->config->get('segment.write_key')) {
            Segment::init($writeKey, (array) $this->app->config->get('segment.init_options'));
        }

        $this->setupQueue();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath($raw = __DIR__.'/../config/segment.php') ?: $raw;

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('segment.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('segment');
        }

        $this->mergeConfigFrom($source, 'segment');
    }

    /**
     * Setup the queue.
     *
     * @return void
     */
    protected function setupQueue()
    {
        if ($this->app->runningInConsole()) {
            $this->app->queue->looping(function () {
                Segment::flush();
            });
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
