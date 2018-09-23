<?php
/**
 * Copyright (c) Ontic. (http://www.ontic.com.au). All rights reserved.
 * See the COPYING file bundled with this package for license details.
 */

declare(strict_types=1);

namespace OnticTest\Expressive\Skeleton;

use Ontic\Expressive\Skeleton\ConfigProvider;

class ConfigProviderTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var ConfigProvider
     */
    protected $provider;

    /**
     * @codingStandardsIgnoreStart
     */
    protected function _before()
    {
        // @codingStandardsIgnoreEnd
        $this->provider = new ConfigProvider();
    }

    /**
     * @codingStandardsIgnoreStart
     */
    protected function _after()
    {
        // @codingStandardsIgnoreEnd
    }

    public function testInvocationReturnsArray()
    {
        $config = ($this->provider)();

        self::assertInternalType('array', $config);
        self::assertEmpty($config);
    }
}
