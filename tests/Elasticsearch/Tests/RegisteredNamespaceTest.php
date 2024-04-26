<?php

namespace Elasticsearch5\Tests;

use Elasticsearch;
use Elasticsearch5\ClientBuilder;
use Elasticsearch5\Serializers\SerializerInterface;
use Elasticsearch5\Transport;
use Mockery as m;

/**
 * Class RegisteredNamespaceTest
 *
 * @category   Tests
 * @package    Elasticsearch
 * @subpackage Tests
 * @author     Zachary Tong <zachary.tong@elasticsearch.com>
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link       http://elasticsearch.org
 */
class RegisteredNamespaceTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testRegisteringNamespace()
    {
        $builder = new FooNamespaceBuilder();
        $client = ClientBuilder::create()->registerNamespace($builder)->build();
        $this->assertEquals("123", $client->foo()->fooMethod());
    }

    /**
     * @expectedException \Elasticsearch5\Common\Exceptions\BadMethodCallException
     */
    public function testNonExistingNamespace()
    {
        $builder = new FooNamespaceBuilder();
        $client = ClientBuilder::create()->registerNamespace($builder)->build();
        $this->assertEquals("123", $client->bar()->fooMethod());
    }
}

class FooNamespaceBuilder implements Elasticsearch5\Namespaces\NamespaceBuilderInterface
{
    public function getName()
    {
        return "foo";
    }

    public function getObject(Transport $transport, SerializerInterface $serializer)
    {
        return new FooNamespace();
    }
}

class FooNamespace
{
    public function fooMethod()
    {
        return "123";
    }
}