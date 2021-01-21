<?php
namespace ItemQuantityFrom1C;

class Data1cHandler
{
    const TIMEOUT = 5;
    
    private $url;
	private $login;
    private $password;

	public function __construct($url, $login, $password)
	{
		$this->url = $url;
        $this->login = $login;
        $this->password = $password;
	}

    public function createSoapClient()
    {
        return $soapClient = new \SoapClient($this->url,
            array(
                'login' => $this->login,
                'password' => $this->password,
                'connection_timeout' => self::TIMEOUT
            )
        );
    }

	public function getItemQuantity($itemParamsArr) 
	{
        $result = $this->createSoapClient()->GetBalans($itemParamsArr);
        $jsResult = $result->return;
        return json_decode($jsResult, true);
    }
}