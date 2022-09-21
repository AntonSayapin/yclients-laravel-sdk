<?php

namespace antonsayapin\YClientsSDK\Requests\Visits;

use antonsayapin\YClientsSDK\Requests\Request;

class Visits extends Request
{
    protected $visitId;

    public function setVisitId($visitId)
    {
        $this->visitId = $visitId;

        return $this;
    }

    protected function request()
    {
        return $this->requestApi("visits/{$this->visitId}");
    }
}
