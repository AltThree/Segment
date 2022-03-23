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

namespace AltThree\Tests\Segment;

use AltThree\Segment\SegmentServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ServiceProviderTest extends AbstractPackageTestCase
{
    use ServiceProviderTrait;

    protected function getServiceProviderClass()
    {
        return SegmentServiceProvider::class;
    }
}
