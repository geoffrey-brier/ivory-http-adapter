<?php

/*
 * This file is part of the Ivory Http Adapter package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\Tests\HttpAdapter;

use GuzzleHttp\Adapter\Curl\MultiAdapter;

/**
 * Guzzle 4 multi curl http adapter test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class Guzzle4MultiCurlHttpAdapterTest extends AbstractGuzzle4CurlHttpAdapterTest
{
    /**
     * {@inheritdoc}
     */
    protected function createAdapter()
    {
        return new MultiAdapter($this->createMessageFactory());
    }
}
