<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function category_items(){
        return $this->hasMany('App/Models/CategoryItem');
    }

    protected $fillable=[
        'name'
    ];
}
