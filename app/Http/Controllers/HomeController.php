<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cms;
use App\Models\Store;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
		$homeObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where(["slug" => "home", "status" => "1"])->firstOrFail();
		$tastingObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where(["slug" => "tasting", "status" => "1"])->firstOrFail();
		$ourBrandObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where(["slug" => "our-brand", "status" => "1"])->firstOrFail();

		return view('home',[
			"homeObj" => $homeObj,
			"tastingObj" => $tastingObj,
			"ourBrandObj" => $ourBrandObj,
		]);
    }

	public function storeLocator()
    {
		return view('store_locator');
    }

	public function aboutUs()
    {
		$cmsObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where(["slug" => "about-us", "status" => "1"])->firstOrFail();
		return view('about_us',["cmsObj" => $cmsObj]);
    }

	public function contactUs()
    {
		$cmsObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where(["slug" => "about-us", "status" => "1"])->firstOrFail();
		return view('contact_us',["cmsObj" => $cmsObj]);
    }

	public function nectrBeverages()
    {
		$medicalObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where(["slug" => "nectr-medical-bevrages", "status" => "1"])->firstOrFail();
		$recreationalObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where(["slug" => "nectr-recreational-bevrages", "status" => "1"])->firstOrFail();

		return view('nectr_beverages',[
			"medicalObj" => $medicalObj,
			"recreationalObj" => $recreationalObj,
		]);
    }

	public function sugerloafSprings()
    {
		$medicalObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where(["slug" => "sms-medical-bevrages", "status" => "1"])->firstOrFail();
		$recreationalObj = Cms::select(["title","slug","description","seo_title","seo_keyword","seo_description","created_at","updated_at"])->where(["slug" => "sms-recreational-bevrages", "status" => "1"])->firstOrFail();

		return view('sugerloaf_springs',[
			"medicalObj" => $medicalObj,
			"recreationalObj" => $recreationalObj,
		]);		
    }

	public function getStoreList(Request $request)
	{
		$obj = Store::select(["id","name","slug","address","latitude","longitude","available_products","phone","photo","status"])->where("status","1");

		if(!empty($request->latitude) && !empty($request->longitude)) {
			$latitudeFrom = $request->latitude;
			$longitudeFrom = $request->longitude;

			//$latitudeFrom = '44.8023442';
			//$longitudeFrom = '-68.7695177';

			$oneEightyByPI = 180/3.14159265359;
			$formula_1 = sin($latitudeFrom/$oneEightyByPI);
			$formula_2 = cos($latitudeFrom/$oneEightyByPI);
			$formula_3 = ($longitudeFrom/$oneEightyByPI);
			$distance = "(((3963.19*acos($formula_1 * sin(latitude/$oneEightyByPI) + $formula_2 * cos(latitude/$oneEightyByPI) * cos(longitude/$oneEightyByPI - $formula_3)))+(3963.19*acos($formula_1 * sin(latitude/$oneEightyByPI) + $formula_2 * cos(latitude/$oneEightyByPI) * cos(longitude/$oneEightyByPI - $formula_3))))/2) as distance";
			$obj = $obj->addSelect(DB::raw($distance));

			if(!empty($request->mile)) {
				$obj = $obj->havingRaw('distance <= '.$request->mile);
			}

			$obj = $obj->orderBy("distance","ASC");
		}
		$obj = $obj->orderBy("name","ASC");
		$obj = $obj->limit($request->limit ?? 25)->get();
		
		// Extract slug values as keys and maintain the original array structure
		//$obj = array_combine(array_column($obj, 'slug'), $obj);
		$response = [
			'success'=>true,
			'data' => $obj,
			'message' =>'Store data retrieved successfully'
		];
		return response()->json($response,200);
	}

	/* Common Send Mail */
	public function sendEmail(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
			'country' => 'required',
			'company_name' => 'required',
			'interested_in' => 'required',
			'message' => 'required',
		], $this->validationMessage());

		$param = $request->all();
		//pr($param,1);

		$serviceObj = resolve('App\Services\EmailService');
		switch($param['fromPage']) {
			case 'contact-us':
				$res = $serviceObj->sendContactUs($param);
				return response()->json($res);
			break;			
		}
	}

	public function validationMessage()
	{
		return [
			'name.required' => __('validation.required',['name']),
			'email.required' => __('validation.email'),
			'email.email' => 'The email must be a valid email address.',
			'phone.required' => __('validation.required',['phone']),
			'country.required' => __('validation.required',['country']),
			'company_name.required' => __('validation.required',['company_name']),
			'interested_in.required' => __('validation.required',['interested_in']),
			'message.required' =>  __('validation.required',['message']),
		];
	}
}
