<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address1',
        'city',
        'zip_code',
        'country',
        'phone',
        'filepath',
        'description',
        'latitude',
        'longitude'
    ];

    // define relationships
    public function beers()
    {
        return $this->hasMany('App\Models\Beer');
    }
}
