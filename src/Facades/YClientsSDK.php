<?php

namespace antonsayapin\YClientsSDK\Facades;

use Illuminate\Support\Facades\Facade;
use antonsayapin\YClientsSDK\Requests\Authorization;
use antonsayapin\YClientsSDK\Requests\Clients;
use antonsayapin\YClientsSDK\Requests\Companies;
use antonsayapin\YClientsSDK\Requests\Documents;
use antonsayapin\YClientsSDK\Requests\Goods;
use antonsayapin\YClientsSDK\Requests\GoodsTransactions\TransactionsSearch;
use antonsayapin\YClientsSDK\Requests\Groups;
use antonsayapin\YClientsSDK\Requests\Records;
use antonsayapin\YClientsSDK\Requests\Schedules;
use antonsayapin\YClientsSDK\Requests\Seances;
use antonsayapin\YClientsSDK\Requests\ServiceCategory;
use antonsayapin\YClientsSDK\Requests\Services;
use antonsayapin\YClientsSDK\Requests\Staff;
use antonsayapin\YClientsSDK\Requests\Storages;
use antonsayapin\YClientsSDK\Requests\Transactions\TransactionsByFilter;
use antonsayapin\YClientsSDK\Requests\Users;
use antonsayapin\YClientsSDK\Requests\Visits\VisitDetails;
use antonsayapin\YClientsSDK\Requests\Visits\Visits;
use antonsayapin\YClientsSDK\Requests\ZReport;

/**
 * Class YClientsSDK.
 *
 * @method static Authorization authorization
 * @method static Companies companies
 * @method static Services services
 * @method static Staff staff
 * @method static ServiceCategory serviceCategory
 * @method static Records records
 * @method static Goods goods
 * @method static Clients clients
 * @method static Visits visits
 * @method static VisitDetails visitDetails
 * @method static Groups groups
 * @method static TransactionsByFilter transactionsByFilter
 * @method static TransactionsSearch goodsTransactionsSearch
 * @method static Documents documents
 * @method static Seances seances
 * @method static Schedules schedules
 * @method static ZReport zReport
 * @method static Storages storages
 * @method static Users users
 */
class YClientsSDK extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \antonsayapin\YClientsSDK\YClientsSDK::class;
    }
}
