<?php

namespace antonsayapin\YClientsSDK\Requests;

class Authorization extends Request
{
    protected function request()
    {
        $data = $this->requestApi('auth', 'post', false);

        return $data->get('user_token', null);
    }
}
