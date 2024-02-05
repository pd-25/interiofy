<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{
    function list(){
        $categorys = Categorie::get();
        return view('admin.categories.list',compact('categorys'));
    }

    function add(){
        return view('admin.categories.add');
    }

    function addpost(Request $request){
        $validatedData = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
        ]);

        $image_path = '';
        if($request->file('icon')){
            $file       = $request->file('icon');
            $name       = $file->getClientOriginalName();
            $image_path = $file->store('services','public',$name);
        }

        $categorie = new Categorie();
            $categorie->name = $request->input('name');
            $categorie->slug = Str::slug($request->input('name'));
            $categorie->icon = $image_path;
            $categorie->description = $request->input('description');
            $categorie->status = $request->input('status');
        $categorie->save();

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
