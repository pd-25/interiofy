<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Partner;

class UserController extends Controller
{
    function partnerlist(){
        $user = Partner::get();
        return view('admin.user.partnerlist',compact('user'));
    }

    function customerlist(){
        $user = User::where('type','user')->get();
        return view('admin.user.customerlist',compact('user'));
    }

}
