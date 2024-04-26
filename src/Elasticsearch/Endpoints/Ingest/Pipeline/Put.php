<?php

namespace Elasticsearch5\Endpoints\Ingest\Pipeline;

use Elasticsearch5\Common\Exceptions;
use Elasticsearch5\Endpoints\AbstractEndpoint;

/**
 * Class Put
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Endpoints\Ingest
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Put extends AbstractEndpoint
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
        if (isset($this->id) !== true) {
            throw new Exceptions\RuntimeException(
                'id is required for PutPipeline'
            );
        }
        $id = $this->id;
        $uri = "/_ingest/pipeline/$id";

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'master_timeout',
            'timeout'
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'PUT';
    }
}
