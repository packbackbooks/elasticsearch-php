<?php

namespace Elasticsearch5\Common\Exceptions;

/**
 * InvalidArgumentException
 *
 * Denote invalid or incorrect argument values
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class InvalidArgumentException extends \InvalidArgumentException implements ElasticsearchException
{
}
