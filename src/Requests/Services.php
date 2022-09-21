<?php

namespace antonsayapin\YClientsSDK\Requests;

use antonsayapin\YClientsSDK\Requests\Traits\Company;

class Services extends Request
{
    use Company;

    protected function request($method = "GET")
    {
        return $this->requestApi("services/{$this->company_id}",$method);
    }
}
