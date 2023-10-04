<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class EsewaController extends Controller
{
    public function success(Request $request)
    {
        if($request->oid && $request->amt &&$request->refId)
        {
            $order = Order::where('invoice_no',$request->oid)->first();
            if($order){
            $url = "https://uat.esewa.com.np/epay/transrec";
            $data =[
            'amt'=> $order->total,
            'rid'=> $request->refId,
            'pid'=> $order->invoice_no,
            'scd'=> 'epay_payment'
                 ];
            }

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);
            $response_code = $this->get_response('response_code',$response);
            if(trim($response_code) =='Success')
            {
                $order->status= 1;
                $order->save();
                return redirect()->route('payment.response')->with('success_message', 'Trasaction completed.');
            }
        }
    }
    public function failure()
    {
        return redirect()->route('payment.response')->with('failure_message', 'Transaction failed.');
    }
    //extract value from response code of verification of payment
    public function get_response($node, $xml)
    {
        if($xml==false){
        return false;
        }
        $found = preg_match('#<'.$node.'[?:\s+>]+)?>(.*?)'.'</'.$node.'>#s',$xml, $matches);
        if($found!= false){
            return $matches[1];
        }
        return false;
    }
    public function response()
    {
        return view('frontend.products');
    }
}
