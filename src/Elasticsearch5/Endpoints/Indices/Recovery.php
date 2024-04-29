<?php

namespace Elasticsearch5\Endpoints\Indices;

use Elasticsearch5\Endpoints\AbstractEndpoint;

/**
 * Class Recovery
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Endpoints\Indices
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Recovery extends AbstractEndpoint
{
    /**
     * @return string
     */
    public function getURI()
    {
        $index = $this->index;
        $uri   = "/_recovery";

        if (isset($index) === true) {
            $uri = "/$index/_recovery";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'detailed',
            'active_only',
            'human'
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'GET';
    }
}