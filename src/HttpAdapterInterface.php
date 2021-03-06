<?php

/*
 * This file is part of the Ivory Http Adapter package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\HttpAdapter;

use Ivory\HttpAdapter\Message\InternalRequestInterface;
use Psr\Http\Message\RequestInterface;

/**
 * Http adapter interface.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
interface HttpAdapterInterface
{
    /**
     * Gets the configuration.
     *
     * @return \Ivory\HttpAdapter\ConfigurationInterface The configuration.
     */
    public function getConfiguration();

    /**
     * Sets the configuration.
     *
     * @param \Ivory\HttpAdapter\ConfigurationInterface $configuration The configuration.
     *
     * @return void No return value.
     */
    public function setConfiguration(ConfigurationInterface $configuration);

    /**
     * Sends a GET request.
     *
     * @param string|object $url     The url.
     * @param array         $headers The headers.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function get($url, array $headers = array());

    /**
     * Sends an HEAD request.
     *
     * @param string|object $url     The url.
     * @param array         $headers The headers.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function head($url, array $headers = array());

    /**
     * Sends a TRACE request.
     *
     * @param string|object $url     The url.
     * @param array         $headers The headers.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function trace($url, array $headers = array());

    /**
     * Sends a POST request.
     *
     * @param string|object $url     The url.
     * @param array         $headers The headers.
     * @param array|string  $datas   The datas.
     * @param array         $files   The files.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function post($url, array $headers = array(), $datas = array(), array $files = array());

    /**
     * Sends a PUT request.
     *
     * @param string|object $url     The url.
     * @param array         $headers The headers.
     * @param array|string  $datas   The datas.
     * @param array         $files   The files.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function put($url, array $headers = array(), $datas = array(), array $files = array());

    /**
     * Sends a PATCH request.
     *
     * @param string|object $url     The url.
     * @param array         $headers The headers.
     * @param array|string  $datas   The datas.
     * @param array         $files   The files.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function patch($url, array $headers = array(), $datas = array(), array $files = array());

    /**
     * Sends a DELETE request.
     *
     * @param string|object $url     The url.
     * @param array         $headers The headers.
     * @param array|string  $datas   The datas.
     * @param array         $files   The files.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function delete($url, array $headers = array(), $datas = array(), array $files = array());

    /**
     * Sends an OPTIONS request.
     *
     * @param string|object $url     The url.
     * @param array         $headers The headers.
     * @param array|string  $datas   The datas.
     * @param array         $files   The files.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function options($url, array $headers = array(), $datas = array(), array $files = array());

    /**
     * Sends a request.
     *
     * @param string|object $url     The url.
     * @param string        $method  The method.
     * @param array         $headers The headers.
     * @param array|string  $datas   The datas.
     * @param array         $files   The files.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function send($url, $method, array $headers = array(), $datas = array(), array $files = array());

    /**
     * Sends a PSR request.
     *
     * @param \Psr\Http\Message\RequestInterface $request The request.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function sendRequest(RequestInterface $request);

    /**
     * Sends an internal request.
     *
     * @param \Ivory\HttpAdapter\Message\InternalRequestInterface $internalRequest The internal request.
     *
     * @throws \Ivory\HttpAdapter\HttpAdapterException If an error occurred.
     *
     * @return \Ivory\HttpAdapter\Message\ResponseInterface The response.
     */
    public function sendInternalRequest(InternalRequestInterface $internalRequest);

    /**
     * Gets the name.
     *
     * @return string The name.
     */
    public function getName();
}
