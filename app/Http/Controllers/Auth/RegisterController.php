<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
Use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\PaypalPayment;
use Omnipay\Omnipay;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use App\Service\RegisterService;
use App\Http\Requests\newRegisterRequest;





class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
        private $gateway;
        private $registerService;


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(settings('paypal_client_id'));
        $this->gateway->setSecret(settings('paypal_api_secret'));
        $this->gateway->setTestMode(settings('paypal_enable_test_mode') == 'yes');
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    // for making validation
    public function create(RegisterService $register,Request $request)
    { 
        // $amount= DB::table('settings')->where('name','register_amount')->pluck('val');
        try {  
            $validator = Validator::make($request->all(), [
                'email' => 'required|unique:users|max:255',
                'password' => 'required',
                'firstname'=>'required',
                'lastname'=>'required',
                'dob'=>'required',
                'parent_address'=>'required',
                'parent_apt'=>'required',
                'parent_city'=>'required',
                'parent_state'=>'required',
                'parent_country'=>'required',
                'parent_zip'=>'required|numeric',
                'phone'=>'required|numeric',
            ]);
         
            if ($validator->fails()) {
                // For example:
                return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
         
                // Also handy: get the array with the errors
                $validator->errors();
         
                // or, for APIs:
                $validator->errors()->toJson();
            }  
            $data=$register->createUser($request);
               $response = $this->gateway->purchase(
            array(
                "amount" => $request->registerAmount,   //$order->total_price,
                'currency' => settings('paypal_currency', 'USD'),
                'returnUrl' => route('register.success',[$data]),
                'cancelUrl' => route('register.cancel',[$data]),
            )
        )->send();
        if ($response->isRedirect()) {
        $response->redirect();
       } else {
           return $response->getmessage() ;  
        }
        } catch (\throwable $ex) {
            DB::rollBack();
            logger('Error While adding new user.');
            report($ex);
            return $ex->getMessage();
        }
     

 }

public function registerSuccess(Request $request)
    {
        
            $user= User::findOrFail($request->id);
            if($request->input('paymentId') && $request->input('PayerID')){
                $transaction = $this->gateway->completePurchase(array(
                    'payer_id'            => $request->input('PayerID'),
                    'transactionReference' => $request->input('paymentId'),
                    
                    'register_id'          => $request->id
                ));     
                $response = $transaction->send();  
           

                // dd($response,$request->id);
                if ($response->isSuccessful()) {
                    $user['paypal_transaction_id'] = $request->payerId;
                   $user["payment_status"]='payment_done';
                    $user->save(); 
                    \Mail::to($user->email)->send(new \App\Mail\RegisterMail($user->email));   
                   session()->flash('successAlert','successfully registered '.$user->email);
                   return redirect('login');
                }
      else{
        return "error";
    }
 }       
}
}
 