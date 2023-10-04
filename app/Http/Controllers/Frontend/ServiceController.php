<?php

namespace App\Http\Controllers\Frontend;

use App\Models\PoliceReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceList;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

// use PDF;

class ServiceController extends Controller
{
    public function s_category()
    {
        $services = service::get()->all();
        return view('frontend.services', compact('services'));
    }

    public function list($category)
    {
        $services = $category;
        $lists = servicelist::where('category',$category)->get()->all();
        if(!$lists){
            return redirect()->route('services')->with('message', 'Services will be avialable soon');
        }
        return view('frontend.services', compact('lists', 'services'));
    }

    public function details($category)
    {
        $listCategory = $category;
        $userInfo = User::find(Auth::id());
        $details = PoliceReport::where('user_email',$userInfo->email)->get()->all();
        return view('frontend.services', compact('userInfo', 'listCategory', 'details'));
    }

    public function add_report(Request $request)
    {
        $report = new PoliceReport;
        $report->first_name = $request->first_name;
        $report->last_name = $request->last_name;
        $report->father_last_name = $request->father_last_name;
        $report->father_first_name = $request->father_first_name;
        $report->mother_first_name = $request->mother_first_name;
        $report->mother_last_name = $request->mother_last_name;
        $report->date_of_birth_bs = $request->date_of_birth_bs;
        $report->date_of_birth_ad = $request->date_of_birth_ad;
        $report->email = $request->email;
        $report->gender = $request->gender;
        $report->temporary_address = $request->temporary_address;
        $report->permanent_address = $request->permanent_address;
        $report->citizen_number = $request->citizen_number;
        $report->citizen_issued_location = $request->citizen_issued_location;
        $report->passport_number = $request->passport_number;
        $report->passport_issued_location = $request->passport_issued_location;
        $report->national_id_number = $request->national_id_number;
        $report->national_id_issued_location = $request->national_id_issued_location;

        $report->user_email = $request->user_email;
        $report->list_category = $request->list_category;

        $user_image = $request->user_image;
        if($user_image){
            $user_imagename = time().'.'.$user_image->getClientOriginalExtension();
            $request->user_image->move('images/frontend/documents',$user_imagename);
            $report->user_image = $user_imagename;
        }
        

        $citizen_card_image = $request->citizen_card_image;
        if($citizen_card_image){
            $citizen_card_imagename = time().'.'.$citizen_card_image->getClientOriginalExtension();
            $request->citizen_card__image->move('images/frontend/documents',$citizen_card_imagename);
            $report->citizen_card_image = $citizen_card_imagename;
        }
        
        

        $passport_card_image = $request->passport_card_image;
        if($passport_card_image){
            $passport_card_imagename = time().'.'.$passport_card_image->getClientOriginalExtension();
            $request->passport_card_image->move('images/frontend/documents',$passport_card_imagename);
            $report->passport_card_image = $passport_card_imagename;
        }

        $national_id_image = $request->national_id_image;
        if($national_id_image){
            $national_id_imagename = time().'.'.$national_id_image->getClientOriginalExtension();
            $request->national_id_image->move('images/frontend/documents',$national_id_imagename);
            $report->national_id_image = $national_id_imagename;
        }
        
        $report->save();
        return redirect()->route('services')->with('message', 'Report created successfully');

    }

    public function download($id)
    {
        // $detail = PoliceReport::find($id);
        // $pdf = PDF::loadView('frontend.services.pdf', compact('detail'));
        // return $pdf->download('police_report.pdf');
    }
}
