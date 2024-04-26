<?php

namespace Elasticsearch5\Endpoints\Ingest;

use Elasticsearch5\Common\Exceptions;
use Elasticsearch5\Endpoints\AbstractEndpoint;

/**
 * Class Simulate
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Endpoints\Ingest
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Simulate extends AbstractEndpoint
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
     * @throws \Elasticsearch5\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->id) === true) {
            return "/_ingest/pipeline/{$this->id}/_simulate";
        }
        return "/_ingest/pipeline/_simulate";
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'verbose',
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return isset($this->body) ? 'POST' : 'GET';
    }
}
