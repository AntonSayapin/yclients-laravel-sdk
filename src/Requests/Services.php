<?php

namespace antonsayapin\YClientsSDK\Requests;

use antonsayapin\YClientsSDK\Requests\Traits\Company;
use antonsayapin\YClientsSDK\Requests\Traits\Staff;
use antonsayapin\YClientsSDK\Requests\Traits\Service;

class Services extends Request
{
    use Company , Staff , Service ;

    protected function request($method = "GET")
    {
    	if( $this->service_id ) {
    		$service = "/services/{$this->service_id}" ;
	    }else {
    		$service = "" ;
	    }
	    if( $this->staffId ) {
		    $par[] = "staff_id={$this->staffId}" ;
	    }
	    if( $this->category_id ) {
		    $par[] = "category_id={$this->category_id}" ;
	    }
	    $pars = "" ;
	    if( count( $par ) > 0 ) {
	    	$pars = "?".implode( $par , "&" ) ;
	    }
	    switch( $method ) {
		    case "POST" :
			    return $this->requestApi("company/{$this->company_id}$service$par",$method);
		    case "GET" :
		    default:
		        return $this->requestApi("company/{$this->company_id}$service$par",$method);
	    }
    }
}
