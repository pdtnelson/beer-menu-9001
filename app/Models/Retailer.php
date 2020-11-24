<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'city'

    ];

    public function menu()
    {
        return $this->hasOne('App\Models\Menu');
    }
}