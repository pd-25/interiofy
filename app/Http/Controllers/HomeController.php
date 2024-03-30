<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contactus;
use App\Models\Aboutus;
use App\Models\Partner;
use App\Models\PartnerPortfolio;
use App\Models\Blog;
use App\Models\Categorie;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function partner_with_us(){
        return view('partnerwithus.index');
    }

    public function architecture(){
        return view('servicesmenu.architecture');
    }

    public function serviceDetails($slug){
        $serviceDetails = Categorie::where('slug','=',$slug)->with('servicebanner','serviceimage','servicecategory')->first();
        $serviceBanners = $serviceDetails->servicebanner()->get();
        
        if($serviceDetails->show_child_images == "0"){
            $serviceSliders = $serviceDetails->serviceimage()->get();
        }else{
            $serviceSliders = [];
        }
        
        $serviceSliders = $serviceDetails->serviceimage()->get();
        $serviceCatSliders = $serviceDetails->servicecategory()->with('servicecategoryimage')->get();
        //dd($serviceCatSliders);
        return view('servicesmenu.service-details',compact('serviceDetails','serviceBanners','serviceCatSliders','serviceSliders'));
    }

    // public function hvac_consultation(){
    //     return view('servicesmenu.hvac-consultation');
    // }

    public function blogs(){
        $blogs = Blog::where('status','1')->get();
        //dd($blogs);
        return view('blogs.blog',compact('blogs'));
    }

    public function blog_details(Request $request, $id){
        $blogs = Blog::where('id',$id)->first();
        return view('blogs.blog-details',compact('blogs'));
    }

    public function generateRandomUuid() {
        $dataToHash = uniqid(); // You can replace this with your actual data

        // Generate an MD5 hash
        $hash = md5($dataToHash);
        
        // Extract the first 8 characters to get a shorter representation
        $shortUuid = substr($hash, 0, 8);
    
        return $shortUuid;
    }

    public function partner_with_us_form_data(Request $request){
        if (User::where('mobile_no', $request->input('mobile_no'))->exists()) {
            echo "userexist";
        }else{

            $user = new User();
            $user->name = $request->input('firm_name');
            $user->email = $request->input('email');
            $user->mobile_no = $request->input('mobile_no');
            $user->type = 'partner';
            $user->save();
            $userid =  $user->id;

            $partner_id = "Prtnr-".$this->generateRandomUuid();

            $partner = new Partner();
            $partner->users_id        = $userid;
            $partner->partner_id      = $partner_id;
            $partner->firm_name       = $request->input('firm_name');
            $partner->firm_pan        = $request->input('firm_pan');
            $partner->firm_gst        = $request->input('firm_gst');
            $partner->firm_start_date = $request->input('firm_start_date');
            $partner->city            = $request->input('city');
            $partner->firm_type       = $request->input('firm_type');
            $partner->major_category  = $request->input('major_category');
            $partner->minor_category  = $request->input('minor_category');
            //$partner->project_image   = $image_path;
            $partner->save();

            // Retrieve the ID of the newly created partner
            $partnerId = $partner->id;

            // Store uploaded images
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
            
            // Your response data to be sent as JSON
            $response = [
                'status' => 'success',
                'partner_id' => $partner_id,
            ];

            // Sending a JSON response
            return response()->json($response);
        }
    }

    public function about_us(){
        $aboutus = Aboutus::first();
        return view('aboutus.index',compact('aboutus'));
    }

    public function contact_us(){
        $contact = Contactus::first();
        return view('contactus.index',compact('contact'));
    }

    public function home_services(){
        if (auth()->check()) {
            $user_logged_in = true;
        }else{
            $user_logged_in = false;
        }
        $partners = User::where('type','=','partner')->with('partner')->get();
        return view('services.home',compact('partners','user_logged_in'));
    }

    public function office_services(){

        return view('services.office');
    }

    public function retail_services(){

        return view('services.retail');
    }

}
