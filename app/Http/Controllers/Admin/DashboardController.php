<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;

class DashboardController extends Controller
{
    public function index()
    {
		$data['totalCmsCnt'] = Cms::count();
		$data['publishedCmsCnt'] = Cms::where("status","1")->count();
		$data['blockedCnt'] = Cms::where("status","0")->count();
		return view('admin.dashboard.index',['data'=>$data]);
    }
}
