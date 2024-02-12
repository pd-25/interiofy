<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contactus;
use App\Models\Aboutus;
use App\Models\Partner;
use App\Models\Blog;
class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function partner_with_us(){
        return view('partnerwithus.index');
    }

    public function interior_decoration(){
        return view('servicesmenu.interior-decoration');
    }

    public function design_plan_architecture(){
        return view('servicesmenu.design-plan-architecture');
    }
    public function electrical_lighting(){
        return view('servicesmenu.electrical-lighting');
    }
    public function plumbing(){
        return view('servicesmenu.plumbing');
    }
    public function structural(){
        return view('servicesmenu.structural');
    }
    public function flooring(){
        return view('servicesmenu.flooring');
    }
    public function carpentry_masonry(){
        return view('servicesmenu.carpentry-masonry');
    }
    public function painting(){
        return view('servicesmenu.painting');
    }

    public function blogs(){
        $blogs = Blog::where('status','1')->get();
        //dd($blogs);
        return view('blogs.blog',compact('blogs'));
    }

    public function blog_details(Request $request, $id){
        $blogs = Blog::where('id',$id)->first();
        return view('blogs.blog-details',compact('blogs'));
    }


    public function partner_with_us_form_data(Request $request){
        if (User::where('mobile_no', $request->input('mobile_no'))->exists()) {
            echo "userexist";
        }else{

            $image_path = '';
            if ($files = $request->file('photo')) {
                //insert new file
                $destinationPath = 'public/partner/'; // upload path
                $image_path = $request->file('photo')->store($destinationPath);
            }

            $user = new User();
                $user->mobile_no = $request->input('mobile_no');
                $user->type = 'partner';
            $user->save();
            $userid =  $user->id;

            $partner = new Partner();
                $partner->users_id        = $userid;
                $partner->partner_id      = "P".rand(100000,1000);
                $partner->firm_name       = $request->input('firm_name');
                $partner->firm_pan        = $request->input('firm_pan');
                $partner->firm_gst        = $request->input('firm_gst');
                $partner->firm_start_date = $request->input('firm_start_date');
                $partner->city            = $request->input('city');
                $partner->firm_type       = $request->input('firm_type');
                $partner->major_category  = $request->input('major_category');
                $partner->project_image   = $image_path;
            $partner->save();
            echo "Success";
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

        return view('services.home');
    }

    public function office_services(){

        return view('services.office');
    }

    public function retail_services(){

        return view('services.retail');
    }

}
