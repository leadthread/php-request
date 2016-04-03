<?php

namespace Zenapply\Request;

interface HttpRequest
{
    public function setUrl($url);
    public function setOptionArray($array);
    public function setOption($name, $value);
    public function execute();
    public function getInfo($name);
    public function close();
}