<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Partner;

class UserController extends Controller
{
    function partnerlist()
    {
        $user = Partner::get();
        return view('admin.user.partnerlist', compact('user'));
    }

    function customerlist(Request $req)
    {

        $user = User::where('type', 'user')->get();
        // session(['status' => $req->status]);

        // if (intval($req->status) === 0) :
        //     $user = User::where('type', 'user')->where('status', 0)->get();            
        // endif;

        return view('admin.user.customerlist', compact('user'));
    }

    function viewCustomer(Request $req)
    {
        $user = User::where('id', $req->id)->first();
        return response()->json($user);
    }

    function updateStatus(Request $req)
    {
        if (intval($req->status) !== 0)
            User::where('id', $req->id)
                ->update([
                    'status' => 0
                ]);
        else
            User::where('id', $req->id)
                ->update([
                    'status' => 1
                ]);

        return response()->json(['message' => 'User updated successfully']);
    }
}
