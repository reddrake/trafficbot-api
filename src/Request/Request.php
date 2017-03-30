<?php
namespace Trafficbot\Request;

use Trafficbot\Request\RequestInterface;
use Trafficbot\Config\ConfigInterface;
use Trafficbot\Operations\OperationInterface;

class Request implements RequestInterface{

    private $options = [];

    protected $requestScheme = 'http://www.trafficbot.uk/api.php';

    protected $config;

    public function __construct(array $options = [])
    {
        $this->options = [];
    }

    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function perform(OperationInterface $operation)
    {
        $data = [
            'key' => urlencode($this->config->getAccessToken()),
            'action' => $operation->getName(),
            'data' => json_encode($operation->getOperationParameter())
        ];

        return $this->curlExec($this->requestScheme, $data);
    }

    protected function curlExec($uri, $data){
        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('POST', $uri, ['form_params' => $data]);
            return json_decode($res->getBody()->getContents(),true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return json_decode($e->getResponse()->getBody(),true);
        }

    }  
}