<?php

namespace Zenapply\Request;

class CurlRequest implements HttpRequest
{
    private $handle = null;

    public function __construct($url) {
        $this->setUrl($url);
    }

    public function setUrl($url) {
        if($this->handle !== null){
            $this->close();
        }
        $this->handle = curl_init($url);
    }

    public function setOptionArray($array) {
        foreach ($array as $key => $value) {
            $this->setOption($key,$value);
        }
    }

    public function setOption($name, $value) {
        curl_setopt($this->handle, $name, $value);
    }

    public function execute() {
        return curl_exec($this->handle);
    }

    public function getInfo($name) {
        return curl_getinfo($this->handle, $name);
    }

    public function close() {
        curl_close($this->handle);
    }
}