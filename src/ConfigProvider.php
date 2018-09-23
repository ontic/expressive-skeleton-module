<?php
/**
 * Copyright (c) Ontic. (http://www.ontic.com.au). All rights reserved.
 * See the COPYING file bundled with this package for license details.
 */

declare(strict_types=1);

namespace Ontic\Expressive\Skeleton;

class ConfigProvider
{
    /**
     * Return the configuration data.
     *
     * @return array
     */
    public function __invoke() : array
    {
        return [];
    }
}
