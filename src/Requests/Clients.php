<?php

namespace antonsayapin\YClientsSDK\Requests;

use antonsayapin\YClientsSDK\Requests\Traits\Company;
use antonsayapin\YClientsSDK\Requests\Traits\Paginated;

class Clients extends Request
{
    use Company, Paginated;

    protected function request()
    {
        return $this->paginateRequest("clients/{$this->company_id}");
    }
}
