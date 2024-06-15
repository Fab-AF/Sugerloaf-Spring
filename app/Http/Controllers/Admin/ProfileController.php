<?php
namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Auth;
use Hash;

class ProfileController extends Controller
{
	public function __construct()
    {
		$this->middleware('auth');
    }

	### Admin Profile
    public function index()
    {
		$userObj = User::where(["id"=>Auth::id(),"role"=>"A","is_active"=>"1"])->first();
		return view('admin.profile.index', ['userObj' => $userObj]);
    }

	### Update Profile: Admin
	public function updateProfile(UserRequest $request,User $user)
	{
		$param = $request->all();
		if(!empty($request->file('photo')))
			$param['photo'] = $this->uploadPhoto($request->file('photo'));

		if(!empty($param['login_password']) && !empty($param['password_confirmation']) && $param['login_password'] == $param['password_confirmation'])
		{
			$param['password'] = Hash::make(trim($param['login_password']));
		}
		$user->fill($param);
		$user = $user->save();
		
		if($user) {
			return redirect()->route('admin.profile')->with([
				"message" => ["icon"=>"success", "text" => "Your profile has been updated", "title" => "Updated"]
			]);
		} else {
			return redirect()->route('admin.profile');
		}
	}

	public function uploadPhoto($photo){
		if(!empty($photo)) {
			$imageName = time().'.'.$photo->extension();
			$path = 'uploads/user';
			checkDir($path);
			$photo->move($path, $imageName);
			//$data['photo'] = $imageName;
			return $imageName;
		}
	}
}