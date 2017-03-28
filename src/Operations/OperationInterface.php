<?php
namespace Trafficbot\Operations;

interface OperationInterface
{
    public function getName();

    public function getOperationParameter();
}