<?php

namespace antonsayapin\YClientsSDK\Requests;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use antonsayapin\YClientsSDK\Exceptions\RequestException;
use antonsayapin\YClientsSDK\Exceptions\Exception;

abstract class Request
{
    private $host = 'https://api.yclients.com/api/v1/';

    private $account = 'default';
    // Auth
    private $login;
    private $password;
    private $bearerToken;
    private $userToken;

    protected $params = [];

    public function __construct()
    {
    }

    // Execute request to yclients api
    abstract protected function request();

    /**
     * @throws RequestException
     *
     * @return Collection
     */
    final public function get()
    {
        $this->setAccountSettings();

        try {
            return $this->request();
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

	/**
	 * @throws RequestException
	 *
	 * @return Collection
	 */
	final public function post()
	{
		$this->setAccountSettings();

		try {
			return $this->request("POST");
		} catch (\Exception $e) {
			throw new Exception($e->getMessage(), $e->getCode());
		}
	}

	/**
	 * @throws RequestException
	 *
	 * @return Collection
	 */
	final public function put()
	{
		$this->setAccountSettings();

		try {
			return $this->request("PUT");
		} catch (\Exception $e) {
			throw new Exception($e->getMessage(), $e->getCode());
		}
	}

    /**
     * @param string | array $account
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function on($account)
    {
        if (!is_string($account) && !is_array($account)) {
            throw new \Exception('Argument account must be string or array');
        }
        $this->account = $account;

        return $this;
    }

    /**
     * @param bool $auth
     *
     * @return Client
     */
    private function getHttpClient($auth = true)
    {
        $authorization = "Bearer {$this->bearerToken}";
        if ($auth) {
            $authorization .= ", User {$this->userToken}";
        }

        return new Client([
            'base_uri' => $this->host,
            'timeout'  => 10,
            'query'  => $this->params,
            'headers'  => [
                'Authorization' => $authorization,
	            'Content-Type' => 'application/json',
	            'Accept' => 'application/vnd.api.v2+json'
            ],
        ]);
    }

    /**
     * @param $url
     * @param string $method
     * @param bool   $auth
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Support\Collection
     */
    final protected function requestApi($url, $method = 'get', $auth = true)
    {
        $method = strtolower($method);

        $options = [];
        $options['query'] = $this->params;

        //
        if (strtolower($url) == 'auth') {
            $options['form_params'] =
                [
                    'login'    => $this->login,
                    'password' => $this->password,
                ];
        }

        $client = $this->getHttpClient($auth);
        $r = $client->request($method, $url, $options);

        return collect(json_decode($r->getBody()->getContents(), true));
    }

    /**
     * @throws \Exception
     */
    private function setAccountSettings() : void
    {
        if (is_array($this->account)) {
            $this->login = array_get($this->account, 'login');
            $this->password = array_get($this->account, 'password');
            $this->bearerToken = array_get($this->account, 'bearer_token');
            $this->userToken = array_get($this->account, 'user_token');
        } else {
            if (empty(config('yclients-laravel-sdk.accounts.'.$this->account))) {
                throw new \Exception('Account '.$this->account.' is not exists in configuration');
            }
            //Auth
            $this->login = config('yclients-laravel-sdk.accounts.'.$this->account.'.login');
            $this->password = config('yclients-laravel-sdk.accounts.'.$this->account.'.password');
            $this->bearerToken = config('yclients-laravel-sdk.accounts.'.$this->account.'.bearer_token');
            $this->userToken = config('yclients-laravel-sdk.accounts.'.$this->account.'.user_token');
        }
    }

	/**
	 * @param $params
	 *
	 * @return $this
	 */
	public function setParams($params)
	{
		$this->params = $params;

		return $this;
	}
}
