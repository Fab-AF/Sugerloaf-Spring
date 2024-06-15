<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Store extends Model
{
    use HasFactory;

	protected $fillable = [
        'name',
        'slug',
        'description',
        'address',
		'latitude',
		'longitude',
		'available_products',
		'phone_prefix',
		'phone',
		'email',	    
		'photo',
		'timezone',
		'status',
    ];
	protected $appends = ['store_photo'];

	/* Create Dynamic Slug */
	protected static function boot()
    {
        parent::boot();
        static::created(function ($data) {
            $data->slug = $data->initSlug($data->name);
            $data->save();
        });
    }

	private function initSlug($title)
    {
        if (static::whereSlug($slug = Str::slug($title))->exists()) {
            $max = static::whereName($title)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-1";
        }

        return $slug;
    }

	/* Get Store photo with full path */
	function getStorePhotoAttribute() {
		$storePhoto = "/images/default_store.webp";

		if(!empty($this->photo)) {
			$storePhoto = url("/uploads/store/".$this->photo);
		}
		return $storePhoto;
	}
}
