<?php

namespace Elasticsearch5\Connections;

use Elasticsearch5\Serializers\SerializerInterface;
use Elasticsearch5\Transport;
use Psr\Log\LoggerInterface;

/**
 * Interface ConnectionInterface
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Connections
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
interface ConnectionInterface
{
    /**
     * Constructor
     *
     * @param $handler
     * @param array $hostDetails
     * @param array $connectionParams connection-specific parameters
     * @param \Elasticsearch5\Serializers\SerializerInterface $serializer
     * @param \Psr\Log\LoggerInterface $log          Logger object
     * @param \Psr\Log\LoggerInterface $trace        Logger object
     */
    public function __construct($handler, $hostDetails, $connectionParams,
                                SerializerInterface $serializer, LoggerInterface $log, LoggerInterface $trace);

    /**
     * Get the transport schema for this connection
     *
     * @return string
     */
    public function getTransportSchema();

    /**
     * Get the hostname for this connection
     *
     * @return string
     */
    public function getHost();

    /**
     * Get the username:password string for this connection, null if not set
     *
     * @return null|string
     */
    public function getUserPass();

    /**
     * Get the URL path suffix, null if not set
     *
     * @return null|string;
     */
    public function getPath();

    /**
     * Check to see if this instance is marked as 'alive'
     *
     * @return bool
     */
    public function isAlive();

    /**
     * Mark this instance as 'alive'
     *
     * @return void
     */
    public function markAlive();

    /**
     * Mark this instance as 'dead'
     *
     * @return void
     */
    public function markDead();

    /**
     * Return an associative array of information about the last request
     *
     * @return array
     */
    public function getLastRequestInfo();

    /**
     * @param $method
     * @param $uri
     * @param null $params
     * @param null $body
     * @param array $options
     * @param \Elasticsearch5\Transport $transport
     * @return mixed
     */
    public function performRequest($method, $uri, $params = null, $body = null, $options = [], Transport $transport = null);
}