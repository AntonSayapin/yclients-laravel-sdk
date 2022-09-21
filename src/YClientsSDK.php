<?php

namespace antonsayapin\YClientsSDK;

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

class YClientsSDK extends AbstractYClientsSDK
{
    /**
     * @return Authorization
     */
    public function authorization()
    {
        return new Authorization();
    }

    /**
     * @return Companies
     */
    public function companies()
    {
        return new Companies();
    }

    /**
     * @return Services
     */
    public function services()
    {
        return new Services();
    }

    /**
     * @return Staff
     */
    public function staff()
    {
        return new Staff();
    }

    /**
     * @return ServiceCategory
     */
    public function serviceCategory()
    {
        return new ServiceCategory();
    }

    /**
     * @return Records
     */
    public function records()
    {
        return new Records();
    }

    /**
     * @return Goods
     */
    public function goods()
    {
        return new Goods();
    }

    /**
     * @return Clients
     */
    public function clients()
    {
        return new Clients();
    }

    /**
     * @return Visits
     */
    public function visits()
    {
        return new Visits();
    }

    /**
     * @return VisitDetails
     */
    public function visitDetails()
    {
        return new VisitDetails();
    }

    /**
     * @return Groups
     */
    public function groups()
    {
        return new Groups();
    }

    /**
     * @return TransactionsByFilter
     */
    public function transactionsByFilter()
    {
        return new TransactionsByFilter();
    }

    /**
     * @return TransactionsSearch
     */
    public function goodsTransactionsSearch()
    {
        return new TransactionsSearch();
    }

    /**
     * @return Documents
     */
    public function documents()
    {
        return new Documents();
    }

    /**
     * @return Seances
     */
    public function seances()
    {
        return new Seances();
    }

    /**
     * @return Schedules
     */
    public function schedules()
    {
        return new Schedules();
    }

    /**
     * @return ZReport
     */
    public function zReport()
    {
        return new ZReport();
    }

    /**
     * @return Storages
     */
    public function storages()
    {
        return new Storages();
    }

    /**
     * @return Users
     */
    public function users()
    {
        return new Users();
    }
}
