<?php
namespace Trafficbot\Config;

interface ConfigInterface
{
    public function getAccessToken();

    public function getRequest();

    public function getRequestFactory();

    public function getResponseTransformer();

    public function getResponseTransformerFactory();
}