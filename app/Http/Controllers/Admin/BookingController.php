<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookings(){
        $data['bookings'] = Booking::all();

        return view('admin.booking.index',$data);
    }
}
