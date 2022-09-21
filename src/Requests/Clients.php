<?php

namespace antonsayapin\YClientsSDK\Requests;

use antonsayapin\YClientsSDK\Requests\Traits\Company;
use antonsayapin\YClientsSDK\Requests\Traits\Paginated;

class Clients extends Request
{
    use Company, Paginated;

	protected function request($method = "GET")
	{
		switch( $method ) {
			case "POST" :
				return $this->requestApi("clients/{$this->company_id}",$method);
			case "GET" :
			default:
				return $this->paginateRequest("clients/{$this->company_id}");
		}
	}
}
