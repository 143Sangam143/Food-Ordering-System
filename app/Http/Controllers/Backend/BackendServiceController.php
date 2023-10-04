<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceList;

class BackendServiceController extends Controller
{
    public function s_category()
    {
        $services = service::get()->all();
        return view('backend.services', compact('services'));
    }

    public function add_category(Request $request)
    {
        $services = new service;
        $services->category = $request->category;
        $services->description = $request->description;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/backend/services/category',$imagename);
        $services->image = $imagename;
    
        $services->save();
        return redirect()->back()->with('message', 'Category created');

    }

    public function delete_category($id)
    {
        $services = service::find($id);
        $services->delete();
        return redirect()->back();

    }

    public function update_category($id)
    {
        $services = service::find($id);
        return view('backend.services', compact('services'));
    }

    public function update_category_confirm(Request $request, $id)
    {
        $services = service::find($id);
        $category_update=$services->category;
        $services->category = $request->category;
        $services->description = $request->description;
        if($request->hasFile('image'))
        {
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images/backend/services/category',$imagename);
            $services->image=$imagename;
        }
        $services->save();
        $lists = servicelist::where('category',$category_update)->get()->all();
        
        foreach($lists as $list){
            echo $list;
            $list->category = $services->category;
            $id=$list->id;
            
            $list->save();
            echo $list;
        }
             
        return redirect()->route('backend.services');
    }
}
