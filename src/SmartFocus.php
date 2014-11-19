<?php

require_once 'SmartFocus/SmartFocus_Auth.php';
require_once 'SmartFocus/Exceptions.php';

/**
 * Class SmartFocus
 */
class SmartFocus
{
    const SUBMISSION_URL = 'https://%s/apiccmd/services/CcmdService?wsdl';

    protected $server;
    protected $client;
    protected $debug = false;

    /**
     * @param string $server
     * @throws SmartFocus_Error
     */
    public function __construct($server = null)
    {
        /* Check server */
        if (!$server) $server = getenv('SMARTFOCUS_SERVER');
        if (!$server) throw new SmartFocus_Error('You must provide a SmartFocus server');
        $this->server = $server;

        $this->auth = new SmartFocus_Auth($this);
    }

    /**
     * @return string
     */
    private function getUrl()
    {
        return sprintf(self::SUBMISSION_URL, $this->server);
    }

    /**
     * @return SoapClient
     */
    private function getClient()
    {
        if (!$this->client)
            $this->client = new SoapClient($this->getUrl(), array("trace" => 1, "exception" => 0));

        return $this->client;
    }

    /**
     * @param $method
     * @param $params
     * @return mixed
     */
    public function call($method, $params)
    {
        $client = $this->getClient();

        return $client->__soapCall($method, $params);
    }
}
