<?php

namespace Elasticsearch5\Endpoints\Indices;

use Elasticsearch5\Endpoints\AbstractEndpoint;
use Elasticsearch5\Common\Exceptions;

/**
 * Class Open
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Endpoints\Indices
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Open extends AbstractEndpoint
{
    /**
     * @throws \Elasticsearch5\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->index) !== true) {
            throw new Exceptions\RuntimeException(
                'index is required for Open'
            );
        }
        $index = $this->index;
        $uri   = "/$index/_open";

        if (isset($index) === true) {
            $uri = "/$index/_open";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'timeout',
            'master_timeout',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
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