[![Latest Stable Version](https://poser.pugx.org/antonsayapin/yclients-laravel-sdk/v/stable)](https://packagist.org/packages/antonsayapin/yclients-laravel-sdk)
[![Latest Unstable Version](https://poser.pugx.org/antonsayapin/yclients-laravel-sdk/v/unstable)](https://packagist.org/packages/antonsayapin/yclients-laravel-sdk)
[![Total Downloads](https://poser.pugx.org/antonsayapin/yclients-laravel-sdk/downloads)](https://packagist.org/packages/antonsayapin/yclients-laravel-sdk)
[![License](https://poser.pugx.org/antonsayapin/yclients-laravel-sdk/license)](https://packagist.org/packages/antonsayapin/yclients-laravel-sdk)

# Laravel YClients SDK


## Install

``` bash
$ composer require antonsayapin/yclients-laravel-sdk
```

**Publish config file**

``` bash
$ php artisan vendor:publish --tag=yclients-laravel-sdk
```

**Laravel 5.5+**

Fork add Laravel 9 requirements.
If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

``` php
...
 antonsayapin\YClientsSDK\YClientsSDKServiceProvider::class
...
```

**Set configs\yclients-laravel-sdk**

``` php
'accounts' => [
     'default' => [
     // Login and password are required to receive USER TOKEN. 
     // If you have them you do not have to fill in these fields
     'login' => '',
     'password' => '',
      // Used in all requests and is mandatory
     'bearer_token' => '',
     'user_token' => ''
   ],
]
```
## Obtain TOKENS

**Bearer token** can be recived from yclients support.

To obtain **user token** set login, password and bearer token in configs and run

``` php
    use antonsayapin\YClientsSDK\Facades\YClientsSDK;
    ...
    YClientsSDK::authorization()->get() // return USER TOKEN
```

## Supported API methods
  - Authorization
  - Clients
  - Companies
  - Goods
  - Records
  - Salons
  - Services
  - ServiceCategory
  - Staff
  - Visits
    - VisitDetails

## Examples

**Clients**
``` php
use antonsayapin\YClientsSDK\Facades\YClientsSDK;
...
$clients = YClientsSDK::clients()->setCompany($companyId)->get();
```
**Companies**
``` php
use antonsayapin\YClientsSDK\Facades\YClientsSDK;
...
$companies = YClientsSDK::companies()->setSalonId($salonId)->get();
```
**Goods**
``` php
use antonsayapin\YClientsSDK\Facades\YClientsSDK;
...
$goods = YClientsSDK::goods()->setCompany($companyId)->get();
```
**Records**

``` php
use antonsayapin\YClientsSDK\Facades\YClientsSDK;
...
$records = YClientsSDK::records()->setCompany($companyId)->setChangedAfter(Carbon::today())->get();
```
**Groups**

``` php
use antonsayapin\YClientsSDK\Facades\YClientsSDK;
...
$salons = YClientsSDK::groups()->get();
```
**ServiceCategory**

``` php
use antonsayapin\YClientsSDK\Facades\YClientsSDK;
...
$serviceCategory = YClientsSDK::serviceCategory()->setCompany($companyId)->get();
```
**Staff**

``` php
use antonsayapin\YClientsSDK\Facades\YClientsSDK;
...
$staff = YClientsSDK::staff()->setCompany($companyId)->get();
```
**Visits**
``` php
use antonsayapin\YClientsSDK\Facades\YClientsSDK;
...
$visits = YClientsSDK::visits()->setVisitId($visitId)->get();
```
**VisitDetails**
``` php
use antonsayapin\YClientsSDK\Facades\YClientsSDK;
...
$visitDetails = YClientsSDK::visitDetails()->setVisitId($visitId)->setSalonId($salonId)->setRecordId($recordId)->get();
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
