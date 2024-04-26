<?php

namespace Elasticsearch5\ConnectionPool\Selectors;

use Elasticsearch5\Connections\ConnectionInterface;

/**
 * Class RoundRobinSelector
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\ConnectionPool\Selectors\ConnectionPool
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RoundRobinSelector implements SelectorInterface
{
    /**
     * @var int
     */
    private $current = 0;

    /**
     * Select the next connection in the sequence
     *
     * @param  ConnectionInterface[] $connections an array of ConnectionInterface instances to choose from
     *
     * @return \Elasticsearch5\Connections\ConnectionInterface
     */
    public function select($connections)
    {
        $this->current += 1;

        return $connections[$this->current % count($connections)];
    }
}
