<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Cms;

class CMSController extends Controller
{
	/* Get List of Active CMS Pages */
	public function getCmsList(Request $request)
	{
		$cmsObj = Cms::select(["title","slug","status"])->where("status","1");
		$cmsObj = $cmsObj->orderBy("id","asc")->get()->toArray();
		
		// Extract slug values as keys and maintain the original array structure
		$cmsObj = array_combine(array_column($cmsObj, 'slug'), $cmsObj);
		$response = [
			'success'=>true,
			'data' => $cmsObj,
			'message' =>'CMS data retrieved successfully'
		];
		return response()->json($response,200);
	}

	/* Get a page content based on slug */
	public function getDetails(Request $request)
	{
		$data = $request->all();
		$validator = Validator::make($data, [
            'slug' => ['required']
        ]);
		if(!empty($validator) && $validator->fails())
        {
            return response()->json(array(
                'success' => false,
                'message' => $validator->getMessageBag()->toArray()
            ), 400);
        }

		try {
			$cmsObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where([
				"slug" => $request->slug,
				"status" => "1",
			])->firstOrFail();

			$cmsObj = $cmsObj->toArray();
			$cmsObj['description'] = filterEditorContent($cmsObj['description']);
			//pr($cmsObj['description'],1);

			return response()->json(array(
                'success' => true,
                'data' => $cmsObj,
            ), 200);
		} catch(ModelNotFoundException $e) {
			return response()->json(array(
				'success' => false,
				'message' => "Invalid request",
			), 400);
		}
	}
}
