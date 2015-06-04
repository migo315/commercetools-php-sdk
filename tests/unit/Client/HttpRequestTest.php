<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 * @created: 29.01.15, 10:51
 */

namespace Sphere\Core\Client;

class RequestTest extends \PHPUnit_Framework_TestCase
{
    public function testPath()
    {
        $this->assertSame('/test', (string)$this->getRequest()->getUri());
    }

    public function testMethod()
    {
        $this->assertSame('GET', $this->getRequest()->getMethod());
    }

    public function testBody()
    {
        $this->assertEmpty((string)$this->getRequest()->getBody());
    }

    public function testContentType()
    {
        $this->assertArrayHasKey('Content-Type', $this->getRequest()->getHeaders());
        $this->assertSame('application/json', $this->getRequest()->getHeader('Content-Type')[0]);
    }

    /**
     * @return HttpRequest
     */
    protected function getRequest()
    {
        return new HttpRequest(\Sphere\Core\Client\HttpMethod::GET, 'test');
    }
}
