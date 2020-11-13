<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'type',
        'ABV',
        'IBU'
    ];

    public function brewery()
    {
        return $this->belongsTo('App\Models\Brewery');
    }

    public function menu()
    {
        return $this->belongsToMany('App\Models\Menu');
    }
}
