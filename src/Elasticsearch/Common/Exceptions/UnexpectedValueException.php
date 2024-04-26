<?php

namespace Elasticsearch5\Common\Exceptions;

/**
 * UnexpectedValueException
 *
 * Denote a value that is outside the normally accepted values
 *
 * @category Elasticsearch
 * @package  Elasticsearch5\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class UnexpectedValueException extends \UnexpectedValueException implements ElasticsearchException
{
}
