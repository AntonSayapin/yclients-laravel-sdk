<?php

namespace antonsayapin\YClientsSDK\Requests\Traits;

trait Service
{
    protected $service_id = false ;

    /**
     * @param $service_id
     *
     * @return $this
     */
    public function setService($service_id)
    {
        $this->service_id = $service_id;

        return $this;
    }
}
