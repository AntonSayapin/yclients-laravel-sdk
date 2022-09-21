<?php

namespace antonsayapin\YClientsSDK\Requests\GoodsTransactions;

use antonsayapin\YClientsSDK\Requests\Request;
use antonsayapin\YClientsSDK\Requests\Traits\Company;
use antonsayapin\YClientsSDK\Requests\Traits\DatesPeriod;
use antonsayapin\YClientsSDK\Requests\Traits\Document;
use antonsayapin\YClientsSDK\Requests\Traits\Paginated;

class TransactionsSearch extends Request
{
    use Company, Paginated, Document, DatesPeriod;

    protected function request()
    {
        return $this->paginateRequest("storages/transactions/{$this->company_id}");
    }
}
