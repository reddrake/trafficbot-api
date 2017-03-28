<?php
namespace Trafficbot\Config;

use Trafficbot\Config\ConfigInterface;

class GenericConfig implements ConfigInterface
{
    protected $accessToken;

    protected $request = '\Trafficbot\Request\Request';

    protected $requestFactory = null;

    protected $responseTransformer = null;

    protected $responseTransformerFactory = null;

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    public function getRequestFactory()
    {
        return $this->requestFactory;
    }

    public function setRequestFactory($callback)
    {
        if (!is_callable($callback)) {
            throw new \InvalidArgumentException("Given argument is not callable");
        }

        $this->requestFactory = $callback;

        return $this;
    }

    public function getResponseTransformer()
    {
        return $this->responseTransformer;
    }

    public function setResponseTransformer($responseTransformer)
    {
        $this->responseTransformer = $responseTransformer;

        return $this;
    }

    public function getResponseTransformerFactory()
    {
        return $this->responseTransformerFactory;
    }

    public function setResponseTransformerFactory($callback)
    {
        if (!is_callable($callback)) {
            throw new \InvalidArgumentException("Given argument is not callable");
        }

        $this->responseTransformerFactory = $callback;

        return $this;
    }
}