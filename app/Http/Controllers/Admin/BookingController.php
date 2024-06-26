<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function homebookings()
    {
        $data['bookings'] = Booking::with('user_details')->where('category', 'home')->orderBy('id','desc')->paginate(20);
        return view('admin.booking.home',$data);
    }

    public function bookingsUpdate($id)
    {
        $id = decrypt($id);
        $data['bookings'] = Booking::with('user_details', 'partner_details')->find($id);
        // $data['partners'] = User::where('type', '=', 'partner')->with('partner')->get();
        return view('admin.booking.update_bookings',$data);
    }


    public function updatebookingdetails(Request $request)
    {
        // dd($request->all());
        $booking =  Booking::find($request->id);
        $booking->budget = $request->budget;
        $booking->date = date('Y-m-d', strtotime($request->date));
        $booking->time = $request->time;
        $booking->home_requirements = json_encode($request->home_requirements);
        $booking->renovation = json_encode($request->renovation);
        $booking->service = $request->services;
        $booking->pincode = $request->pincode;
        $booking->expert_id = $request->expert_id;
        $booking->block = $request->block;
        $booking->city = $request->city;
        $booking->status = $request->status;
        $booking->save();
        return back()->with('success', 'Successfully updated');
    }

    public function officebookings()
    {
        $data['bookings'] = Booking::with('user_details')->where('category', 'office')->paginate(20);
        return view('admin.booking.home',$data);
    }
    
    public function retailbookings()
    {
        $data['bookings'] = Booking::with('user_details')->where('category', 'retail')->paginate(20);
        return view('admin.booking.home',$data);
    }

    public function bookingsDelete($id)
    {
        $bookings = Booking::find($id);
        $bookings->delete();
        return back()->with('success', 'Deleted successfully');
    }
    
}
