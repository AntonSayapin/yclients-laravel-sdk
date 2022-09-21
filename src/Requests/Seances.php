<?php

namespace antonsayapin\YClientsSDK\Requests;

use antonsayapin\YClientsSDK\Requests\Traits\Company;
use antonsayapin\YClientsSDK\Requests\Traits\Date;
use antonsayapin\YClientsSDK\Requests\Traits\Staff;

class Seances extends Request
{
    use Company, Staff, Date;

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Support\Collection
     */
    protected function request()
    {
        return $this->requestApi("timetable/seances/{$this->company_id}/{$this->staffId}/{$this->date}");
    }
}
