<?php

namespace Elasticsearch5\Endpoints\Tasks;

use Elasticsearch5\Common\Exceptions;
use Elasticsearch5\Endpoints\AbstractEndpoint;

/**
 * Class Cancel
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Endpoints\Tasks
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Cancel extends AbstractEndpoint
{
    private $taskId;

    /**
     * @param string $taskId
     *
     * @throws \Elasticsearch5\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setTaskId($taskId)
    {
        if (isset($taskId) !== true) {
            return $this;
        }

        $this->taskId = $taskId;

        return $this;
    }

    /**
     * @throws \Elasticsearch5\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->id) === true) {
            return "/_tasks/{$this->taskId}/_cancel";
        }

        return "/_tasks/_cancel";
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'node_id',
            'actions',
            'parent_node',
            'parent_task',
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
