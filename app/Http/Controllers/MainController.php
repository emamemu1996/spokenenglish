<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\slidermodel;
use App\Models\contactmodel;
use Image;
use storage;
use DB;
use File;



class MainController extends Controller
{


      public function welcome()
    {
      
       $experiencesetting = DB::table('experience')->orderBy('id', 'asc')->get();
       $slidesetting = DB::table('slidesetting')->where('id','1')->orderBy('id', 'asc')->get();
       $aboutsetting = DB::table('aboutme')->where('id','1')->orderBy('id', 'asc')->get();
       $aboutintrosetting = DB::table('aboutintro')->orderBy('id', 'asc')->get();
       $resumeedu = DB::table('resume')->where('type','Education')->orderBy('id', 'asc')->get();
       $resumeexperi = DB::table('resume')->where('type','Experience')->orderBy('id', 'asc')->get();
       $skillsec1 = DB::table('skill')->where('section','section1')->orderBy('id', 'asc')->get();
        $skillsec2 = DB::table('skill')->where('section','section2')->orderBy('id', 'asc')->get();
        $galarysec = DB::table('galary')->orderBy('id', 'desc')->get();
        $servicesec = DB::table('service')->orderBy('id', 'asc')->get();
        $testimonialsec = DB::table('testimonial')->orderBy('id', 'asc')->get();
         $homesettingexduration = DB::table('websitesetting')->where('id','1')->orderBy('id', 'asc')->get();

        return view('welcome',compact('slidesetting','experiencesetting','aboutsetting','aboutintrosetting','resumeedu','resumeexperi','skillsec1','skillsec2','galarysec','servicesec','testimonialsec','homesettingexduration'));
    
       
    }



         
 public function aboutsec()
    {
    
        $aboutintrosetting = DB::table('aboutintro')->orderBy('id', 'asc')->get();
        $aboutsetting = DB::table('aboutme')->where('id','1')->orderBy('id', 'asc')->get();
        $homesettingexduration = DB::table('websitesetting')->where('id','1')->orderBy('id', 'asc')->get();
        $skillsec1 = DB::table('skill')->where('section','section1')->orderBy('id', 'asc')->get();
        $skillsec2 = DB::table('skill')->where('section','section2')->orderBy('id', 'asc')->get();
         $resumeedu = DB::table('resume')->where('type','Education')->orderBy('id', 'asc')->get();
       $resumeexperi = DB::table('resume')->where('type','Experience')->orderBy('id', 'asc')->get();
        $aboutpageset = DB::table('aboutpage')->where('id','1')->orderBy('id', 'asc')->get();
        $slidesetting = DB::table('slidesetting')->where('id','1')->orderBy('id', 'asc')->get();
        $aboutworkdata = DB::table('aboutwork')->orderBy('id', 'asc')->get();
        return view('about',compact('slidesetting','aboutintrosetting','aboutsetting','homesettingexduration','skillsec1','skillsec2','resumeedu','resumeexperi','aboutpageset','aboutworkdata'));
    }




 public function servicemenudata()
    {
    
      $slidesetting = DB::table('slidesetting')->where('id','1')->orderBy('id', 'asc')->get();
      $experiencesetting = DB::table('experience')->orderBy('id', 'asc')->get();
      $homesettingexduration = DB::table('websitesetting')->where('id','1')->orderBy('id', 'asc')->get();
      $servicesec = DB::table('service')->orderBy('id', 'asc')->get();
      $ordertable = DB::table('ordertable')->orderBy('id', 'asc')->get();

        return view('service',compact('slidesetting','experiencesetting','homesettingexduration','servicesec','ordertable'));
    }




//contactpage

    public function contactpage()
    {
    
      $contactset = DB::table('contactsetting')->where('id','1')->orderBy('id', 'desc')->get();
        return view('contactpage',compact('contactset'));
    }



 public function sendemail(Request $request)
    {
            
     $request->validate([
        'w3lName' => 'required',
        'w3lSender' => 'required', 
        'w3lSubect' => 'required', 
        'w3lWebsite' => 'required', 
        'w3lMessage' => 'required'
      ]);


        $slidertext= new contactmodel();
        $slidertext->name = $request->w3lName;
        $slidertext->sender = $request->w3lSender;
        $slidertext->subject = $request->w3lSubect;
        $slidertext->website = $request->w3lWebsite;
        $slidertext->message = $request->w3lMessage;
        $slidertext->status = "no";


      $details =array(
        'name' => $request->w3lName,
        'sender' => $request->w3lSender,
        'subject' => $request->w3lSubect,
        'website' => $request->w3lWebsite,
        'body' => $request->w3lMessage
        );
   
       \Mail::to($request->w3lSender)->send(new \App\Mail\contactus($details));

       $slidertext->save();
        return redirect()->route('contactpage')->with('status', ' Data Add success !');

        
    }



}
