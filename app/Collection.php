<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
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

class Collection extends Model
{
    public function products(){
        return $this->hasMany('App\Product','category_id','id');
    }
    
    static function collections(){
        $collections=Collection::all();
        return $collections;
    }

    static function categories(){
        $categories=array(
            'رجال',
            'سيدات',
            'اكسسوارات',
            'حقائب',
        );
        return $categories;
    }
	
   
}
