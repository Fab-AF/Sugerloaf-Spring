<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Store;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
	/* Get List of Active Store Pages */
	public function getStoreList(Request $request)
	{
		$obj = Store::select(["name","slug","address","latitude","longitude","available_products","phone","email","photo","status"])->where("status","1");

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
			//$obj = $obj->havingRaw('distance <= '.$miles)->orderBy("distance",'ASC');
		}

		$obj = $obj->orderBy("name","asc")->get()->toArray();
		
		// Extract slug values as keys and maintain the original array structure
		$obj = array_combine(array_column($obj, 'slug'), $obj);
		$response = [
			'success'=>true,
			'data' => $obj,
			'message' =>'Store data retrieved successfully'
		];
		return response()->json($response,200);
	}
}
