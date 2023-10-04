<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PoliceReport;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verify()
    {
        $i=0;
        $details = PoliceReport::get()->all();
        $details = PoliceReport::where('status', 'unchecked')->get()->all();
        foreach($details as $detail){
            $i=$i+1;
        }
        $i=0;
        return view('backend.verify', compact('details','i'));
    }

    public function verification(Request $request, $id)
    {
        $details = PoliceReport::find($id);
        $details->checked_date = $request->checked_date;
        $details->dispatch = $request->dispatch;
        $details->remarks = $request->remarks;
        $details->v_name = $request->v_name;
        $details->v_post = $request->v_post;
        $details->status = $request->status;
        $details->save();

        $i=0;
        $details = PoliceReport::get()->all();
        $details = PoliceReport::where('status', 'unchecked')->get()->all();
        foreach($details as $detail){
            $i=$i+1;
        }
        $i=0;
        return view('backend.verify', compact('details','i'));
    }
}
