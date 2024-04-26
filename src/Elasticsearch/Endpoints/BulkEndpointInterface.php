<?php

namespace Elasticsearch5\Endpoints;

use Elasticsearch5\Serializers\SerializerInterface;
use Elasticsearch5\Transport;

/**
 * Interface BulkEndpointInterface
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Endpoints
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
interface BulkEndpointInterface
{
    /**
     * Constructor
     *
     * @param SerializerInterface $serializer A serializer
     */
    public function __construct(SerializerInterface $serializer);
}
