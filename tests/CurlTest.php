<?php

namespace Zenapply\Request\Tests;

use Zenapply\Request\CurlRequest;
use Zenapply\Request\HttpRequest;

class CurlTest extends TestCase
{
    protected $request;

    public function testItCreatesAnInstanceOfHttpRequest(){
        $r = new CurlRequest("http://google.com");
        $this->assertInstanceOf(HttpRequest::class,$r);
    }
}
