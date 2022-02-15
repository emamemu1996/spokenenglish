<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\dialoguemodel;
use App\Models\mydialogmodel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use File;
use Carbon\Carbon;
class apicontroller extends Controller
{


  






 public function app_login(Request $request)
    {



        $date = Carbon::today()->subDays(0);

         $checkstudents = DB::table('users')->where('email',$request->email)->first();

         if ($checkstudents) {

             if ($checkstudents->created_at<$date) {
                 return ['success'=>'4','schoolcode'=>'11','id'=>'0'];
             }elseif ($checkstudents->status == '0') {
                 return ['success'=>'5','schoolcode'=>'11','id'=>'0'];
             }elseif (Hash::check($request->password,$checkstudents->password)) {
                 return ['success'=>'1','schoolcode'=>'11','id'=>$checkstudents->id];
             }else{
                 return ['success'=>'2','schoolcode'=>'0','id'=>'0'];
             }


         }else{
            return ['success'=>'3','schoolcode'=>'0','id'=>'0'];
         }


        

        
         
      
    }





 public function checkdate(Request $request)
    {


       

            
                 return ['success'=>'1','schoolcode'=>'11','id'=>'0'];
           

        

        
         
      
    }











 public function app_register(Request $request)
    {

        $randomcode = random_int(10000, 20000);
        $submitdata= new User();
        $submitdata->name = $request->name;
        $submitdata->email = $request->email;
        $submitdata->password = Hash::make($request->password);
        $submitdata->status = "0";
        $submitdata->remember_token = $randomcode;


    
        

        $successdata = $submitdata->save();


        if ($successdata) {

                    $url = "http://66.45.237.70/api.php";
                      $number=$request->email;
                      $text="Dear User, Your Spoken English Easily Apps OTP is: ".$randomcode;
                      $data= array(
                      'username'=>"emamemu",
                      'password'=>"7FZTR2W4",
                      'number'=>"$number",
                      'message'=>"$text"
                      );

                      $ch = curl_init(); // Initialize cURL
                      curl_setopt($ch, CURLOPT_URL,$url);
                      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      $smsresult = curl_exec($ch);
                      $p = explode("|",$smsresult);
                      $sendstatus = $p[0];


            $checkstudents = DB::table('users')->where('email',$request->email)->first();

         if ($checkstudents) {

             if (Hash::check($request->password,$checkstudents->password)) {
                 return ['success'=>'1','schoolcode'=>$randomcode,'id'=>$checkstudents->id];
             }else{
                 return ['success'=>'2','schoolcode'=>'0','id'=>'0'];
             }


         }else{
            return ['success'=>'3','schoolcode'=>'0','id'=>'0'];
         }

        }else{
            return ['success'=>'3','schoolcode'=>'0','id'=>'0'];
        }



      

         

        

        
         
      
    }









 public function app_dialogue()
    {



       

         $mydata = DB::table('dialogue')->where('type',$_GET['type'])->where('status','1')->orderBy('priority', 'asc')->paginate(40);

       
         return $mydata;
        

        
         
      
    }





 public function app_mydialogue($id)
    {



 

         $mydata = DB::table('mydialogue')->where('dialogid',$id)->orderBy('id', 'asc')->get();

          return ["success"=>"1","data"=>$mydata];
        

        
         
      
    }




    public function app_mydialogue_practics()
    {



 

         $mydata = DB::table('mydialogue')->where('dialogid',$_GET['dialogid'])->orderBy('id', 'asc')->paginate(1);

          return $mydata;
        

        
         
      
    }










}
