<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstLabel extends Model
{
    protected $fillable = [
        'label_name',
        'label_color',
        'not_display_in_duties',
    ];


    public function scopeActive($query)
    {
        return $query->where('admin_id', Auth::user()->id);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (Auth::check()) {
                $model->admin_id = Auth::user()->id; // Set admin_id to the logged-in user's ID
            }
        });
    }

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('mst_labels_cache');
        });

        static::deleted(function () {
            Cache::forget('mst_labels_cache');
        });
    }
}
