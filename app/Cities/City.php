<?php

namespace App\Cities;

use App\Provinces\Province;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'province_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }

    public function barangays()
    {
    	return $this->hasMany('Jsdecena\MCPro\Models\Barangay');
    }
}
