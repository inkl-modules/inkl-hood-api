<?php

namespace Inkl\HoodApi;

class Client
{
    const ENDPOINT = 'https://www.hood.de/api.htm';

    private $accountName;
    private $accountPassword;

    /**
     * @param $accountName
     * @param $accountPassword
     */
    public function __construct($accountName, $accountPassword)
    {
        $this->accountName = $accountName;
        $this->accountPassword = md5($accountPassword);
    }

    public function request($function, \DOMDocument $dataDom)
    {
        $dom = $this->getRequestWrapper($function);

        $apiElement = $dom->getElementsByTagName('api')->item(0);

        $dataElement = $dom->importNode($dataDom->firstChild, true);
        $apiElement->appendChild($dataElement);

        $body = $dom->saveXML();

        echo $body;

        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post(self::ENDPOINT, [
                'debug' => false,
                'body' => $body
            ]);

        } catch (\Exception $e)
        {
            print_r($e->getResponse()->getBody(true)->getContents());
            exit;
        }

        print_r($response->getBody()->getContents());
        exit;

        return $result;
    }

    private function getRequestWrapper($function)
    {
        $baseRequest = new \DOMDocument('1.0', 'UTF-8');
        $baseRequest->preserveWhiteSpace = false;
        $baseRequest->formatOutput = true;

        $apiElement = $baseRequest->createElement('api');
        $apiElement->setAttribute('type', 'public');
        $apiElement->setAttribute('version', '1.0');
        $apiElement->setAttribute('user', $this->accountName);
        $apiElement->setAttribute('password', $this->accountPassword);
        $baseRequest->appendChild($apiElement);

        $apiElement->appendChild($baseRequest->createElement('function', $function));
        $apiElement->appendChild($baseRequest->createElement('accountName', $this->accountName));
        $apiElement->appendChild($baseRequest->createElement('accountPass', $this->accountPassword));

        return $baseRequest;
    }

}