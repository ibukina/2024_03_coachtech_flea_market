<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }

    protected $fillable=[
        'user_id',
        'shop_id',
    ];
}
