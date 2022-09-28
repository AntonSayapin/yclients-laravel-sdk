<?php

namespace antonsayapin\YClientsSDK\Requests\Traits;

trait Category
{
    protected $category_id = false ;

    /**
     * @param $category_id
     *
     * @return $this
     */
    public function setCategory($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }
}
