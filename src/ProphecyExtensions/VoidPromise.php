<?php

/*
 * (c) Paul Crellin <development@crellbar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crellbar\ProphecyExtensions;

use Prophecy\Promise\PromiseInterface;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;

class VoidPromise implements PromiseInterface
{
    /**
     * Returns void
     *
     * @param array          $args
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @return void
     */
    public function execute(array $args, ObjectProphecy $object, MethodProphecy $method)
    {
    }
}