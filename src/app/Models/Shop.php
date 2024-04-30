<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }

    public function staffs(){
        return $this->hasMany('App\Models\Staff');
    }

    protected $fillable=[
        'user_id',
        'name',
        'area_id',
        'genre_id',
        'summary',
        'img_url',
    ];
}
