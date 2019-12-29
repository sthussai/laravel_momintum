<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class PaymentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {   
        $user = Auth::user();

        $stripe_id = $user->stripe_id;
        





 //return($value);
 /* if (session()->has('status')){
     return(session('status'));
 } */

        if($stripe_id === null){
            $stripe_enabled=false;
            $message="You currently don't have online payment options enabled. Would you like to enable online payment options? ";
           return view('payments.index',[ 'message'=>$message,'stripe_enabled'=>$stripe_enabled]);
       }else{$stripe_enabled=true;}
 
      \Stripe\Stripe::setApiKey("sk_test_mjbX2sjmeB1lxyk2p51BvLm0007zjhZL7i");



        $customer = \Stripe\Customer::retrieve($stripe_id);

        $invoices = $user->invoices();        

//dd($invoices);

        $refunds = \Stripe\Refund::all(["limit" => 3]);



        if ($user->hasCardOnFile()) {
            //
            $cardonfile='Yes';
        }else{$cardonfile=null;}
        
        return view('payments.index',['stripe_enabled'=>$stripe_enabled,'refunds'=>$refunds,'invoices'=>$invoices,'customer'=>$customer,'cardonfile'=>$cardonfile,'user'=>$user]);
    }


   
    public function update(Request $request)
    { 
        $user = Auth::user();

        $stripe_id = $user->stripe_id;
        \Stripe\Stripe::setApiKey("sk_test_mjbX2sjmeB1lxyk2p51BvLm0007zjhZL7i");
        $customer = \Stripe\Customer::retrieve($stripe_id);        
   
        $customer = \Stripe\Customer::update($stripe_id,
         [
             'name'=> $request->name,
             'phone'=> $request->phone,
             'email'=> $request->email,
             "address" => ['line1' => $request->address, 
                        'city' => $request->city, 
                        'state' => $request->state, 
                        'postal_code' => $request->zip, ] ,

         ]);
    
         return redirect('payment');
        
    }

    public function updatecard(Request $request)
    { 
        $user = Auth::user();

        $stripe_id = $user->stripe_id;
        \Stripe\Stripe::setApiKey("sk_test_mjbX2sjmeB1lxyk2p51BvLm0007zjhZL7i");
        $customer = \Stripe\Customer::retrieve($stripe_id);        
   
        $customer = \Stripe\Customer::update($stripe_id,
         [
             'name'=> $request->name,
             'phone'=> $request->phone,
             'email'=> $request->email,
             "address" => ['line1' => $request->address, 
                        'city' => $request->city, 
                        'state' => $request->state, 
                        'postal_code' => $request->zip, ] ,

         ]);
    
         return redirect('payment');
        
    }
    
    
    
    
    
    
    public function success()
    {
    return view('payment.success');
    }    

    public function store(Request $request)
    {

        $token = $request->stripeToken;
/*         $plan = $request->plan;
        $stripe_plan = $request->stripe_plan;

        $user->newSubscription($plan, $stripe_plan)->create($token); */



        return redirect('/payment');


}
/* $user->newSubscription('main', 'Momintum@Markaz')->create($token, [

    'name' => Auth::user()->name,
    'email' => Auth::user()->email,    
    ]);
 */    


public function destroy(Request $request)
    {
        $user = User::find(auth()->id());
        $user->subscription('Momintum')->cancelNow();

        return redirect('/payment');
    }

public function charge(Request $request)
    {   
        
        //return($request);
        $user = User::find(auth()->id());
        
        if ($user->hasCardOnFile()) {
            //
            $charge = $user->invoiceFor($request->event_name,$request->cost*100,[
                'description' => $request->event_name,
            ],['description' => $request->event_name,]);
            
            return redirect('/payment');
    
        }   else{return redirect('/payment/edit');}
        
    }






//Adds decimal point to stripe charge value
            
/*           $charge->amount = substr_replace($charge->amount,".",-2,0);
          $charge->amount = substr_replace($charge->amount,"$",0,0); */
           

        

//        $eventregisters = EventRegister::where('owner_id', auth()->id())->get();
//        $activityreports = ActivityReport::where('owner_id', auth()->id())->get();

 //       $charges = \Stripe\Charge::all(["customer" => $stripe_id, "limit" => 5 ]);
}