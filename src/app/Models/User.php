<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function profile(){
        return $this->hasOne('App\Models\Profile');
    }

    public function shops(){
        return $this->belongsToMany('App\Models\Shop');
    }

    public function staffs(){
        return $this->hasMany('App\Models\Staff');
    }

    public function items(){
        return $this->hasMany('App\Models\Item');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    public function sold_items(){
        return $this->hasMany('App\Models\SoldItem');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
        'introduction',
        'img_url',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
