<?php
namespace Elasticsearch5\Tests\Connections;

use Elasticsearch5\Client;
use Elasticsearch5\ClientBuilder;
use Elasticsearch5\Connections\Connection;
use Elasticsearch5\Serializers\SerializerInterface;
use Elasticsearch5\Serializers\SmartSerializer;
use Psr\Log\LoggerInterface;

class ConnectionTest extends \PHPUnit\Framework\TestCase
{
    private $logger;
    private $trace;
    private $serializer;

    protected function setUp()
    {
        $this->logger = $this->createMock(LoggerInterface::class);
        $this->trace = $this->createMock(LoggerInterface::class);
        $this->serializer = $this->createMock(SerializerInterface::class);
    }

    public function testConstructor()
    {
        $params = [];
        $host = [
            'host' => 'localhost'
        ];

        $connection = new Connection(
            function(){},
            $host,
            $params,
            $this->serializer,
            $this->logger,
            $this->trace
        );

        $this->assertInstanceOf(Connection::class, $connection);
    }

    public function testGetHeadersContainUserAgent()
    {
        $params = [];
        $host = [
            'host' => 'localhost'
        ];
        $connection = new Connection(
            function(){},
            $host,
            $params,
            $this->serializer,
            $this->logger,
            $this->trace
        );
        $headers =  $connection->getHeaders();
        $this->assertArrayHasKey('User-Agent', $headers);
        $this->assertContains('elasticsearch-php/'. Client::VERSION, $headers['User-Agent'][0]);
    }

    public function testUserAgentHeaderIsSent()
    {
        $params = [];
        $host = [
            'host' => 'localhost'
        ];
        $connection = new Connection(
            ClientBuilder::defaultHandler(),
            $host,
            $params,
            $this->serializer,
            $this->logger,
            $this->trace
        );
        $result = $connection->performRequest('GET', '/');
        $request = $connection->getLastRequestInfo()['request'];
        $this->assertArrayHasKey('User-Agent', $request['headers']);
        $this->assertContains('elasticsearch-php/'. Client::VERSION, $request['headers']['User-Agent'][0]);
    }
}
