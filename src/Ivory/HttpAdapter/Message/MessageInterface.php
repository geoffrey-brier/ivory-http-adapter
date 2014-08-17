<?php

/*
 * This file is part of the Ivory Http Adapter package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\HttpAdapter\Message;

use Psr\Http\Message\MessageInterface as PsrMessageInterface;

/**
 * Message interface.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
interface MessageInterface extends PsrMessageInterface
{
    /** @const string The protocol version 1.0. */
    const PROTOCOL_VERSION_10 = '1.0';

    /** @const string The protocol version 1.1. */
    const PROTOCOL_VERSION_11 = '1.1';

    /**
     * Sets the protocol version.
     *
     * @param string $protocolVersion The protocol version.
     */
    public function setProtocolVersion($protocolVersion);

    /**
     * Checks if there are headers.
     *
     * @return boolean TRUE if there are headers else FALSE.
     */
    public function hasHeaders();

    /**
     * Removes the headers.
     *
     * @param array $headers The header names.
     */
    public function removeHeaders($headers);

    /**
     * Checks if there is a body.
     *
     * @return boolean TRUE if there is a body else FALSE.
     */
    public function hasBody();

    /**
     * Clears the parameters.
     */
    public function clearParameters();

    /**
     * Checks if there are parameters.
     *
     * @return boolean TRUE if there are parameters else FALSE.
     */
    public function hasParameters();

    /**
     * Gets the parameters.
     *
     * @return array The parameters.
     */
    public function getParameters();

    /**
     * Sets the parameters.
     *
     * @param array $parameters The parameters.
     */
    public function setParameters(array $parameters);

    /**
     * Adds the parameters.
     *
     * @param array $parameters The parameters.
     */
    public function addParameters(array $parameters);

    /**
     * Removes the parameters.
     *
     * @param array $names The parameter names.
     */
    public function removeParameters(array $names);

    /**
     * Checks if there is a parameter.
     *
     * @param string $name The parameter name.
     */
    public function hasParameter($name);

    /**
     * Gets a parameter.
     *
     * @param string $name The parameter name.
     *
     * @return mixed The parameter value.
     */
    public function getParameter($name);

    /**
     * Sets a parameter.
     *
     * @param string $name  The parameter name.
     * @param mixed  $value The parameter value.
     */
    public function setParameter($name, $value);

    /**
     * Adds a parameter.
     *
     * @param string $name  The parameter name.
     * @param mixed  $value The parameter value.
     */
    public function addParameter($name, $value);

    /**
     * Removes a parameter.
     *
     * @param string $name The parameter value.
     */
    public function removeParameter($name);
}
