<?php

namespace Elasticsearch5\Endpoints\Cluster;

use Elasticsearch5\Endpoints\AbstractEndpoint;
use Elasticsearch5\Common\Exceptions;

/**
 * Class Reroute
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Endpoints\Cluster
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Reroute extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @throws \Elasticsearch5\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        $uri   = "/_cluster/reroute";

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'dry_run',
            'filter_metadata',
            'master_timeout',
            'timeout',
            'explain',
            'metric'
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'POST';
    }
}
