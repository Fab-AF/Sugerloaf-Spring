<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\DataTables\StoreDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Store;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
		return view('admin.store.index');
    }

	public function create()
    {
		return view('admin.store.create');
    }

	public function store(StoreRequest $request)
    {	
		$param = $request->all();
		//pr($param,1);
		if(!empty($request->file('photo')))
			$param['photo'] = $this->uploadPhoto($request->file('photo'));
		
		$obj = Store::create($param);

        if($obj) {
			return redirect()->route('store.list')->with([
				"message" => ["icon"=>"success", "text" => "Store has been created sucessfully","title" => "Saved!"],
			]);
		}
		else {
			return redirect()->route('store.list');
		}
	}

	public function data(StoreDatatable $datatable){
		return $datatable->ajax();
	}

	public function edit(Store $store, Request $request)
    {
		//pr($store->store_photo,1);
		return view('admin.store.edit', ['obj' => $store]);
    }

	public function update(StoreRequest $request, Store $store)
    {
		$param = $request->all();
		if(!empty($request->file('photo')))
			$param['photo'] = $this->uploadPhoto($request->file('photo'));

		$store->fill($param);
		$store = $store->save();

		if($store) {
			return redirect()->route('store.list')->with([
				"message" => ["icon"=>"success", "text" => "Store has been updated", "title" => "Updated"]
			]);
		}
		else {
			return redirect()->route('store.list');
		}
    }

	public function destroy(Store $store)
    {
		return $store->delete();
    }

	public function uploadPhoto($photo){
		if(!empty($photo)) {
			$imageName = time().'.'.$photo->extension();
			$path = 'uploads/store';
			checkDir($path);
			$photo->move($path, $imageName);
			//$data['photo'] = $imageName;
			return $imageName;
		}
	}
}
