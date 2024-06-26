<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';     // to fill out uuid
    protected $keyType = 'string';
    public $incrementing = false;

//    public function category()
//    {
//        return $this->hasOne('App\Models\Category')->pluck('name');
//    }

    use HasFactory;
}
