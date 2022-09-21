<?php

namespace antonsayapin\YClientsSDK\Requests;

use antonsayapin\YClientsSDK\Requests\Traits\Company;
use antonsayapin\YClientsSDK\Requests\Traits\PaginatedWithoutCount;

class Goods extends Request
{
    use Company, PaginatedWithoutCount;

    protected $goodId;

    public function setGoodId($goodId)
    {
        $this->goodId = $goodId;

        return $this;
    }

    protected function request()
    {
        return $this->paginateRequest("goods/{$this->company_id}/{$this->goodId}");
    }
}
