<?php

namespace App\Http\Controllers;

use App\ManagedServer;
use App\ServerlizedServer;
use Auth;

use Illuminate\Http\Request;



class User extends Controller
{

    function index(){
        
        $user = Auth::guard('customer')->check();
        
        if ($user == false) {
            return redirect()->route('login');
        }
        
        return view('userDash');
    }

    function getServer(){
        $user = Auth::guard('customer')->user();
        $params['servers'] = ManagedServer::where('customer_id', $user->id)->get();
        return response()->json($params, 200);
    }

    function plans(){
        $params = config('Plans');
        return response()->json($params);
    }

    function deploy(Request $request){
        $user = Auth::guard('customer')->user();
        $plans = Config('Plans');


        if($request->isMethod('post')){
            
            $value = $this->validate($request, [
                "options" => "required",
                "label" => "required"
            ],[
                "options.required" => "Choose your Server, if you already have a server then go with Custom Server (First Option)",
                "label.required" => "Enter a Label for this Deployment example Blog, Website"
            ]);

            if($value['options'] == "Custom"){

                

                $v0 = $this->validate($request, [
                    "auth_mode" => "required",
                    "options_c" => "required",
                    "stack" => "required"
                ], [
                    "auth_mode.required" => "Please select your server Auth Mode.",
                    "options_c.required" => "Select the Custom Server management plan.",
                    "stack.required" => "Choose one Software Stack."
                ]);

                $plan = $v0['options_c'];

                if($v0['auth_mode'] == "Root"){

                    $v1 = $this->validate($request, [
                        "ip" => "required|ip",
                        "password" => "required"
                    ], [
                        'ip.required' => "Enter your server IPv4 address.",
                        'ip.ip' => "Enter a valid server IPv4 address.",
                        'password.required' => "Enter your server root password"
                    ]);

                    

                }else if($v0['auth_mode'] == "PublicPassword"){

                    $v1 = $this->validate($request, [
                        "ip" => "required|ip",
                        "password" => "required",
                        "public" => "required"
                    ], [
                        'ip.required' => "Enter your server IPv4 address.",
                        'ip.ip' => "Enter a valid server IPv4 address.",
                        'password.required' => "Enter your server root password",
                        'public.required' => "Paste the public key."
                    ]);
                    
                }else if($v0['auth_mode'] == "Public"){
                    $v1 = $this->validate($request, [
                        "ip" => "required|ip",
                        "public" => "required"
                    ], [
                        'ip.required' => "Enter your server IPv4 address.",
                        'ip.ip' => "Enter a valid server IPv4 address.",
                        'public.required' => "Paste the public key."
                    ]);
                }

                $charges = $plans['Custom'][$v0['options_c']]['monthly_charge'];

                

            } else if($value['options'] == "Vultr"){

                $v0 = $this->validate($request, [
                    "options_v" => "required",
                    "stack" => "required"
                ], [
                    "options_v.required" => "Select the Vultr server.",
                    "stack.required" => "Choose one Software Stack."
                ]);

                $charges = $plans['Vultr'][$v0['options_v']]['monthly_charge'];
                $plan = $v0['options_v'];

                $n = new ServerlizedServer;
                $n->provider = "Vultr";
                $n->ip = "";
                $n->root_password = "";
                $n->save();
                

            }else if($value['options'] == "DO"){

                $v0 = $this->validate($request, [
                    "options_d" => "required",
                    "stack" => "required"
                ],[
                "options_d.required" => "Select the Digital Ocean server.",
                "stack.required" => "Choose one Software Stack."
            ]);

            $charges = $plans['DO'][$v0['options_v']]['monthly_charge'];
            $plan = $v0['options_d'];

            $n = new ServerlizedServer;
            $n->provider = "DO";
            $n->ip = "";
            $n->root_password = "";
            $n->save();

            }

            $stack = ($v0 == "PHP") ? [1, 2] : [3,4];
            $new = new ManagedServer;
            $new->customer_id = $user->id;
            $new->name = $value['label'] ;
            $new->auth_mode = $v0['auth_mode'] ?? 'Root';
            $new->public_key = $v1['public'] ?? null;
            $new->private_key = "no" ;
            $new->stack_id_set = json_encode($stack);
            $new->os_id = 1;
            $new->charges_monthly = $charges;
            $new->ip = $v1['ip'] ?? '';
            $new->root_password =  $v1['password'] ?? null;
            $new->status = 'Installing' ;
            $new->plan_id = $plan;
            $new->serverlized_server_id = $n->id ?? null;

            $new->save();
        }

        return response()->json([], 200);
    }

 
    function __construct(){

        $this->middleware('UserMiddleware');
       

    }


}
