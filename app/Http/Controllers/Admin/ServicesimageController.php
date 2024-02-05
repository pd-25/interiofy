<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicesimage;
use App\Models\Categorie;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServicesimageController extends Controller
{
    function list(){
        $servicesimage = Servicesimage::get();
        return view('admin.servicesimage.list',compact('servicesimage'));
    }

    function add(){
        $categorys = Categorie::get();
        return view('admin.servicesimage.add',compact('categorys'));
    }

    function addpost(Request $request){
        $validatedData = $request->validate([
            'categorie_id' => ['required'],
        ]);

        if($request->file('serviceimage')){
            foreach($request->file('serviceimage') as $file)
            {
                $name       = $file->getClientOriginalName();
                $image_path = $file->store('servicesimage','public',$name);

                $serviceimage = new Servicesimage();
                    $serviceimage->categorie_id  = $request->input('categorie_id');
                    $serviceimage->services_name = $request->input('services_name');
                    $serviceimage->slug          = Str::slug($request->input('services_name'));
                    $serviceimage->image_path    = $image_path;
                    $serviceimage->status        = $request->input('status');
                $serviceimage->save();
            }
        }


        // Additional logic or redirection after successful data storage
        return redirect()->back()->with('success', 'Services stored successfully!');
    }

    function edit(){

    }

    function editpost(){

    }

    function delete(){

    }
}
