<?php

namespace Trafficbot\ResponseTransformer;

interface ResponseTransformerInterface
{
    public function transform($response);
}