<?php

namespace Elasticsearch5\Common\Exceptions\Curl;

use Elasticsearch5\Common\Exceptions\ElasticsearchException;
use Elasticsearch5\Common\Exceptions\TransportException;

/**
 * Class OperationTimeoutException
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Common\Exceptions\Curl
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
  */
class OperationTimeoutException extends TransportException implements ElasticsearchException
{
}