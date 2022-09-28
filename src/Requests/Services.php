<?php

namespace antonsayapin\YClientsSDK\Requests;

use antonsayapin\YClientsSDK\Requests\Traits\Company;
use antonsayapin\YClientsSDK\Requests\Traits\Staff;
use antonsayapin\YClientsSDK\Requests\Traits\Service;
use antonsayapin\YClientsSDK\Requests\Traits\Category;

class Services extends Request
{
    use Company , Staff , Service , Category ;

    protected function request($method = "GET")
    {
	    if( $this->service_id ) {
		    $service = "/{$this->service_id}" ;
	    }else {
		    $service = "" ;
	    }
	    if( $this->staffId ) {
		    $this->params['staff_id'] = $this->staffId ;
	    }
	    if( $this->category_id ) {
		    $this->params['category_id'] = $this->category_id ;
	    }
	    switch( $method ) {
		    case "POST" :
			    return $this->requestApi("company/{$this->company_id}/services$service",$method);
		    case "GET" :
		    default:
			    return $this->requestApi("company/{$this->company_id}/services$service",$method);
	    }
    }
}
