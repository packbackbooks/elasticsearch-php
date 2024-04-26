<?php

namespace Elasticsearch5\ConnectionPool\Selectors;

/**
 * Class RandomSelector
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Connections\Selectors
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
interface SelectorInterface
{
    /**
     * Perform logic to select a single ConnectionInterface instance from the array provided
     *
     * @param  ConnectionInterface[] $connections an array of ConnectionInterface instances to choose from
     *
     * @return \Elasticsearch5\Connections\ConnectionInterface
     */
    public function select($connections);
}
