<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cms extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
		'type',
		'is_deletable',
		'seo_title',
	    'seo_keyword',
	    'seo_description'
    ];

	/* Create Dynamic Slug */
	protected static function boot()
    {
        parent::boot();
        static::created(function ($cms) {
            $cms->slug = $cms->initSlug($cms->title);
            $cms->save();
        });
    }

    private function initSlug($title)
    {
        if (static::whereSlug($slug = Str::slug($title))->exists()) {
            $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}";
        }

        return $slug;
    }
}
