<?php

namespace App\DataTables;

use App\Models\Store;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Http\Request;

class StoreDatatable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()->eloquent($query);
    }

    public function query(Store $model,Request $request)
    {
		$param = $request->all();		
		$obj = $model->newQuery();
        return $obj;
    }
}