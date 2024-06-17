<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cms;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\CMSDatatable;

class CMSController extends Controller
{
    private $service;

	public function __construct()
    {
       
    }
    
    public function index()
    {
		return view('admin.cms.index');
    }

	public function create(Request $request)
    {
		$content = view('admin.editor.cmsPageTemplate');
		$pageTitle = $request->get('newpage');
		$slug = Str::slug($pageTitle);
		$newPage = Cms::create([
			"title" => $pageTitle,
			"slug" => $slug,
			"description" => $content,
			"status" => "1"
		]);

		if($newPage) 
		{
			$editpageUrl = route("public.editor.view")."?type=page&page=".$newPage->id;
			return redirect($editpageUrl);
		}
    }

	public function data(CMSDatatable $datatable){
		return $datatable->ajax();
	}

	public function destroy(Cms $cms)
    {
        return $cms->delete();
    }
}
