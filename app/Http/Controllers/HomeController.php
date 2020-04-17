<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Product;
use App\Collection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {     
         
        if(Auth::user()->id==1){
       
            return redirect('/afterlogin/admin/home');
        }
        else
        return view('afterlogin.shop-collections');
    }
    
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');

    }
}
