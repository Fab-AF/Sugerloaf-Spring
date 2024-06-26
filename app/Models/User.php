<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
		'role',
		'phone_prefix',
		'phone',
		'is_active',
		'photo',
		'email_verified_at',
		'timezone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	protected $appends = ['user_photo'];

	/* User : Get User photo with full path (user_photo) */
	function getUserPhotoAttribute() {
		$userPhoto = "/images/default_img.jpg";
		if(!empty($this->photo)) {
			$userPhoto = url("/uploads/user/".$this->photo);
		}
		return $userPhoto;
	}
}
