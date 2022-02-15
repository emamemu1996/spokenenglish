<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\aboutpagemodel;
use App\Models\aboutworkmodel;
use App\Models\ordertable;
use App\Models\contactmodel;
use App\Models\contactsettingmodel;
use DB;
use File;

class Aboutcontroller extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
    }



 public function adminaboutsetting()
    {
    
     $aboutpageset = DB::table('aboutpage')->where('id','1')->orderBy('id', 'asc')->get();
        return view('admin/adminaboutsetting',compact('aboutpageset'));
    }




    public function adminaboutsubmit(Request $request,$id)
    {
            
     $request->validate([
        'title' => 'required',
        'des' => 'required',
        'btnurl' => 'required',
        'abouttitle1' => 'required',
        'abouttitle2' => 'required',
        'aboutimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     

        
        
    ]);


        $slidertext= aboutpagemodel::find($id);
        $slidertext->title = $request->title;
        $slidertext->des = $request->des;
        $slidertext->btnurl = $request->btnurl;
        $slidertext->abouttitle1 = $request->abouttitle1;
        $slidertext->abouttitle2 = $request->abouttitle2;
        

         if ($request->hasFile('image')) {
        if (File::exists('images/'.$slidertext->image)) {
            File::delete('images/'. $slidertext->image);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','aboutpageimg').'.'. $request->image->getClientOriginalExtension(); // rename image
                $request->image->move($location, $filename);
               
              
                 $slidertext->image =$filename;
               
            }



             if ($request->hasFile('aboutimage')) {
        if (File::exists('images/'.$slidertext->aboutimage)) {
            File::delete('images/'. $slidertext->aboutimage);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','aboutpagesecimg').'.'. $request->aboutimage->getClientOriginalExtension(); // rename image
                $request->aboutimage->move($location, $filename);
               
                 $slidertext->aboutimage =$filename;
               
            }




        



        $slidertext->update();
       return redirect()->route('adminaboutsetting')->with('status', ' Student Add success !');

        
    }




  public function workdetails()
    {
    
      $aboutworkdata = DB::table('aboutwork')->orderBy('id', 'asc')->get();
        return view('admin/workdetails',compact('aboutworkdata'));
    }




 public function submitworkdetails(Request $request)
    {
            
     $request->validate([
        'title' => 'required',
        'workcount' => 'required', 
        'des' => 'required', 
      ]);


        $slidertext= new aboutworkmodel();
        $slidertext->title = $request->title;
        $slidertext->workcount = $request->workcount;
        $slidertext->des = $request->des;


    
    

        $slidertext->save();
        return redirect()->route('workdetails')->with('status', ' Data Add success !');

        
    }



 public function deleteworkdetails(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=aboutworkmodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('workdetails')->with('status', ' Data delete success !');

        
    }



  public function ordersec()
    {
    
      $ordertable = DB::table('ordertable')->orderBy('id', 'asc')->get();
        return view('admin/ordersection',compact('ordertable'));
    }


 public function contactresponse()
    {
    
      $contact = DB::table('contactus')->orderBy('id', 'desc')->get();
        return view('admin/contactresponse',compact('contact'));
    }


    public function singlesms($id)
    {

   

     $slidertext= contactmodel::find($id);
     $slidertext->status = 'seen';
     $slidertext->update();


      $contact = DB::table('contactus')->where('id',$id)->orderBy('id', 'desc')->get();
        return view('admin/singlesms',compact('contact'))->with('status', ' Data Add success !');
    }





public function delcontactresponse(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=contactmodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('contactresponse')->with('status', ' Data delete success !');

        
    }



 public function submitordersec(Request $request)
    {
            
     $request->validate([
        'planname' => 'required',
        'planprice' => 'required', 
        'planservice1' => 'required', 
        'planservice2' => 'required', 
        'planservice3' => 'required', 
        'planservice4' => 'required', 
        'planservice5' => 'required', 
      ]);


        $slidertext= new ordertable();
        $slidertext->planname = $request->planname;
        $slidertext->planprice = $request->planprice;
        $slidertext->planservice1 = $request->planservice1;
        $slidertext->planservice2 = $request->planservice2;
        $slidertext->planservice3 = $request->planservice3;
        $slidertext->planservice4 = $request->planservice4;
        $slidertext->planservice5 = $request->planservice5;


    
    

        $slidertext->save();
        return redirect()->route('ordersec')->with('status', ' Data Add success !');

        
    }



 public function deleteordersec(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=ordertable::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('ordersec')->with('status', ' Data delete success !');

        
    }



 public function emailreply(Request $request)
    {
            
     $request->validate([
        'sender' => 'required',
        'subject' => 'required', 
        'des' => 'required'
      ]);




      $details =array(
        'sender' => $request->sender,
        'subject' => $request->subject,
        'des' => $request->des
        );
   
       \Mail::to($request->sender)->send(new \App\Mail\mailreply($details));

      
        return redirect()->back()->with('status', ' Data Add success !');

        
    }




//contact setting



 public function contactsetting()
    {
    
      $contactset = DB::table('contactsetting')->where('id','1')->orderBy('id', 'desc')->get();
        return view('admin/contactsetting',compact('contactset'));
    }




 public function submitcontactsetting(Request $request)
    {
            
     $request->validate([
        'mobile' => 'required',
        'email' => 'required', 
        'location' => 'required', 
        'des' => 'required', 
        'fbpagelink' => 'required', 
        'maplocation' => 'required'
      ]);


        $slidertext= contactsettingmodel::find(1);
        $slidertext->mobile = $request->mobile;
        $slidertext->email = $request->email;
        $slidertext->location = $request->location;
        $slidertext->des = $request->des;
        $slidertext->fbpagelink = $request->fbpagelink;
        $slidertext->maplocation = $request->maplocation;


    
    

        $slidertext->update();
        return redirect()->route('contactsetting')->with('status', ' Data Add success !');

        
    }




}
