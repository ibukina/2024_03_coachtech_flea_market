<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function condition(){
        return $this->belongsTo('App\Models\Condition');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    public function sold_items(){
        return $this->hasMany('App\Models\SoldItem');
    }

    public function comments(){
        return $this->hasMany('App/Models/Comment');
    }

    protected $fillable=[
        'user_id',
        'condition_id',
        'category_item_id',
        'name',
        'price',
        'description',
        'img_url',
    ];

    public function scopeKeywordSearch($query, $keyword){
        if(!empty($keyword)){
            $query->where('name', 'LIKE', '%' . "$keyword" . '%')
            ->orWhere('description', 'LIKE', '%' . "$keyword" . '%');
        }
    }
}
