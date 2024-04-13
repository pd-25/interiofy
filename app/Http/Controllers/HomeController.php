<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contactus;
use App\Models\Aboutus;
use App\Models\Partner;
use App\Models\PartnerPortfolio;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Enquries;
use Stevebauman\Location\Facades\Location;


class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function partner_with_us()
    {
        return view('partnerwithus.index');
    }

    public function architecture()
    {
        return view('servicesmenu.architecture');
    }

    public function serviceDetails($slug)
    {
        $serviceDetails = Categorie::where('slug', '=', $slug)->with('servicebanner', 'serviceimage', 'servicecategory')->first();
        $serviceBanners = $serviceDetails->servicebanner()->get();

        if ($serviceDetails->show_child_images == "0") {
            $serviceSliders = $serviceDetails->serviceimage()->get();
        } else {
            $serviceSliders = [];
        }

        $serviceSliders = $serviceDetails->serviceimage()->get();
        $serviceCatSliders = $serviceDetails->servicecategory()->with('servicecategoryimage')->get();
        //dd($serviceCatSliders);
        return view('servicesmenu.service-details', compact('serviceDetails', 'serviceBanners', 'serviceCatSliders', 'serviceSliders'));
    }

    // public function hvac_consultation(){
    //     return view('servicesmenu.hvac-consultation');
    // }

    public function blogs()
    {
        return view('blogs.blog');
    }

    public function blog_details(Request $request, $id)
    {
        $blogs = Blog::where('id', $id)->first();
        return view('blogs.blog-details', compact('blogs'));
    }

    public function generateRandomUuid()
    {
        $dataToHash = uniqid(); // You can replace this with your actual data

        // Generate an MD5 hash
        $hash = md5($dataToHash);

        // Extract the first 8 characters to get a shorter representation
        $shortUuid = substr($hash, 0, 8);

        return $shortUuid;
    }

    public function partner_with_us_form_data(Request $request)
    {
        $request->validate([
            'firm_name' => 'required',
            'mobile_no' => 'required|min:11|numeric',
            'email' => 'required|email|unique:users',
        ]);
        if (User::where('mobile_no', $request->mobile_no)->exists()) {
            return response()->json("userexist");
        } else {
            $user = new User();
            $user->name = $request->firm_name;
            $user->email = $request->email;
            $user->mobile_no = $request->mobile_no;
            $user->type = 'partner';
            $user->save();
            $userid = $user->id;
            $partner_id = "Prtnr-" . $this->generateRandomUuid();
            $partner = new Partner();
            $partner->users_id = $userid;
            $partner->partner_id = $partner_id;
            $partner->firm_name = $request->firm_name;
            $partner->firm_pan = $request->firm_pan;
            $partner->firm_gst = $request->firm_gst;
            $partner->firm_start_date = $request->firm_start_date;
            $partner->city = $request->city;
            $partner->firm_type = $request->firm_type;
            $partner->major_category = $request->major_category;
            $partner->minor_category = $request->minor_category;
            $partner->save();
            $partnerId = $partner->id;
            if($request->file('partnerportfolio')){
                foreach($request->file('partnerportfolio') as $file)
                {
                    $name       = $file->getClientOriginalName();
                    $image_path = $file->store('partnerportfolio','public',$name);
    
                    $partnerportfolio = new PartnerPortfolio();
                    $partnerportfolio->partner_id  = $partnerId;
                    $partnerportfolio->image_path    = $image_path;
                    $partnerportfolio->save();
                }
            }
            $response = [
                'status' => 'success',
                'partner_id' => $partner_id,
            ];
            return response()->json($response);
        }
    }

    public function about_us()
    {
        $aboutus = Aboutus::first();
        return view('aboutus.index', compact('aboutus'));
    }

    public function contact_us()
    {
        $contact = Contactus::first();
        return view('contactus.index', compact('contact'));
    }

    public function storeEnquries(Request $request)
    {
        $request->validate([
            'fullName' => 'required',
            'phoneNo' => 'required|min:11|numeric',
            'email' => 'required|email:rfc,dns',
            'address' => 'required',
        ]);
        $enquiry = new Enquries;
        $ip = request()->ip();
        $enquiry->ip = $ip;
        $currentUser = Location::get($ip);
        if($currentUser){
            $enquiry->city = $currentUser->cityName;
            $enquiry->state = $ $currentUser->regionName;
            $enquiry->latitude = $currentUser->latitude;
            $enquiry->longitude = $currentUser->longitude;
        }
        $enquiry->fullName = $request->fullName;
        $enquiry->phoneNo = $request->phoneNo;
        $enquiry->email = $request->email;
        $enquiry->status = 0;
        $enquiry->address = $request->address;
        if($enquiry->save())
        {
            return redirect()->back()->with('success', 'Thank you we have received your enquiry. We will contact you asap.');
        }else{
            return redirect()->back()->with('error', 'We encountered an error! Please try again later. Thanks.');
        }
    }

    public function home_services()
    {
        if (auth()->check()) {
            $user_logged_in = true;
        } else {
            $user_logged_in = false;
        }
        $partners = User::where('type', '=', 'partner')->with('partner')->get();
        return view('services.home', compact('partners', 'user_logged_in'));
    }

    public function office_services()
    {
        $partners = User::where('type', '=', 'partner')->with('partner')->get();
        return view('services.office', compact('partners'));
    }

    public function retail_services()
    {
        $partners = User::where('type', '=', 'partner')->with('partner')->get();
        return view('services.retail', compact('partners'));
    }

    public function booking(Request $request)
    {
        $timestampPart = substr(time(), -4);
        $randomPart = mt_rand(1000, 9999);

        $userId = null;
        if($request->mobile_no && $request->name && $request->email && $request->pin)
        {
            $userDetails = User::where('mobile_no', $request->mobile_no)->first();
            if($userDetails){
                return response()->json([
                    'service_id' => " We have found that you are already registered. Please login for booking services"
                ]);
            }else{
                $user = new User;
                $user->name = $request->name;
                $user->mobile_no = $request->mobile_no;
                $user->email = $request->email;
                $user->pin = $request->pin;
                $user->save();
                $userId = $user->id;
            }
        }
        $booking = new Booking;
        $booking->budget = $request->budget;
        $booking->category = $request->category;
        $booking->date = date('Y-m-d', strtotime($request->date));
        $booking->time = $request->time;
        if($request->home_requirements){
            $booking->home_requirements = json_encode($request->home_requirements);
        }
        if($request->renovation){
            $booking->renovation = json_encode($request->renovation);
        }
        $booking->service = $request->services;
        $booking->pincode = $request->pincode;
        $booking->expert_id = $request->expert_id;
        $city = explode("/",$request->city);
        $booking->block = $city[0];
        $booking->city = $city[1];
        $booking->service_id = $timestampPart . $randomPart;
        $booking->user_id = $userId == null ? auth()->user()->id : $userId;
        $booking->save();
        return response()->json([
            'service_id' => $booking->service_id
        ]);
    }

}
