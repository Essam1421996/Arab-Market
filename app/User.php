<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect,Response;
use Carbon\Carbon;
use DB;

use App\User;
use App\Product;
use App\Collection;
use App\Cart;
use App\Wishlist;
use App\Review;


class User extends Authenticatable
{

    public function carts(){
        return $this->hasMany('App\Cart','user_id','id');
    }
    public function checkouts(){
        return $this->hasMany('App\Checkout','user_id','id');
    }
    public function wishlists(){
        return $this->hasMany('App\Wishlist','user_id','id');
    }
    
    public function order(){
        return $this->belongsTo('App\Order','user_id','id');
    }

    public function gifts(){
        return $this->hasMany('App\Gift','user_id','id');
    }
    public function reviews(){
        return $this->hasMany('App\Review','user_id','id');
    }
    static function users(){
        $users=User::where('id','!=',Auth::user()->id)->get();
        return $users;
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	
}
