<?php

namespace Elasticsearch5\Common\Exceptions;

/**
 * Conflict409Exception, thrown on 409 conflict http error
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Conflict409Exception extends \Exception implements ElasticsearchException
{
}
