<?php

namespace App\DataTables;

use App\Models\Cms;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Http\Request;

class CMSDatatable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'cmsdatatable.action');
    }

    public function query(Cms $model,Request $request)
    {
		$param = $request->all();		
		$cmcModel = $model->newQuery();
        return $cmcModel;
    }
}
