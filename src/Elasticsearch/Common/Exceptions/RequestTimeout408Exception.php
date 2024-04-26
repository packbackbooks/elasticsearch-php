<?php

namespace Elasticsearch5\Common\Exceptions;

/**
 * RequestTimeout408Exception
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RequestTimeout408Exception extends BadRequest400Exception implements ElasticsearchException
{
}
