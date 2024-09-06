<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UsersController extends Controller
{
   public function showAdminName()
   {
       return 'ahmed';
   }
   public function getIndex()
   {
     //    return view('welcome');

    // $data=[];
    // $data['age']=24;
    // $data['name']='basmalah';
    // return view('welcome' , $data);
   
    // $obj = new \stdClass();
    // $obj -> name = 'halloooo';
    // $obj -> age = 25;
    $data=['a'=>'ahmed' , 'b'=>'bassem'];
    // return view('welcome', compact('obj'));
    return view('welcome', compact('data'));
   }
}
