<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceList;

class BackendServiceListController extends Controller
{
    public function s_list($category)
    {
        $services = $category;
        $lists = servicelist::where('category',$category)->get()->all();
        return view('backend.services', compact('lists', 'services'));
    }

    public function add_list(Request $request)
    {
        $lists = new servicelist;
        $lists->name = $request->name;
        $lists->description = $request->description;
        $lists->category = $request->category;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/backend/services/list',$imagename);
        $lists->image = $imagename;
        $lists->save();
        return redirect()->back()->with('message', 'List created successfully');
    }

    public function delete_list($id)
    {
        $lists = servicelist::find($id);
        $lists->delete();
        return redirect()->back();
    }

    public function update_list($id)
    {
        $lists = servicelist::find($id);
        $services = $lists->category;
        return view('backend.services', compact('lists', 'services'));
    }

    public function update_list_confirm(Request $request, $id)
    {
        $lists = servicelist::find($id);
        $lists->name = $request->name;
        $lists->description = $request->description;
        if($request->hasFile('image'))
        {
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images/backend/services/list',$imagename);
            $lists->image=$imagename;
        }
        $lists->save();
        return redirect()->route('backend.services');
    }
}
