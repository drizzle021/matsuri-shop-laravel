<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'uuid';

    protected $keyType = 'string';
    public $incrementing = false;

//    public function Product()
//    {
//        return $this->belongsTo('App\Models\Product', 'category_id');
//    }

    use HasFactory;
}
