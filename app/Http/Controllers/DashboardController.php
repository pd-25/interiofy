<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
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

    public function index(Request $request){
        return view('dashboard.index');
     }

     public function partner_dashboard(Request $request){
        return view('partnerdashboard.index');
     }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
