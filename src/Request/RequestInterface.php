<?php
namespace Trafficbot\Request;

use Trafficbot\Config\ConfigInterface;
use Trafficbot\Operations\OperationInterface;

interface RequestInterface
{
    public function setConfig(ConfigInterface $config);

    public function perform(OperationInterface $operation);
}