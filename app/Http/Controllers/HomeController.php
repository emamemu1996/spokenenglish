<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\slidermodel;
use App\Models\aboutmodel;
use App\Models\aboutintromodel;
use App\Models\experiencemodel;
use App\Models\resumemodel;
use App\Models\skillmodel;
use App\Models\galarymodel;
use App\Models\servicemodel;
use App\Models\testimonialmodel;
use App\Models\websettingmodel;
use App\Models\socialmodel;
use DB;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
      $slidesetting = DB::table('slidesetting')->where('id','1')->orderBy('id', 'asc')->get();
        return view('home',compact('slidesetting'));
    }


    


     public function slidesection()
    {
      $slidesetting = DB::table('slidesetting')->where('id','1')->orderBy('id', 'asc')->get();
        return view('admin/slidesection',compact('slidesetting'));
    }



  public function experiencesection()
    {
       $experiencesetting = DB::table('experience')->orderBy('id', 'asc')->get();
        $homesettingexduration = DB::table('websitesetting')->where('id','1')->orderBy('id', 'asc')->get();
        return view('admin/experiencesection',compact('experiencesetting','homesettingexduration'));
    }


     public function aboutmesec()
    {
      $aboutsetting = DB::table('aboutme')->where('id','1')->orderBy('id', 'asc')->get();
      $aboutall= DB::table('aboutintro')->orderBy('id', 'asc')->get();
        return view('admin/aboutmesec',compact('aboutsetting','aboutall'));
    }



    public function resumesec()
    {
        $myresume = DB::table('resume')->orderBy('id', 'asc')->get();
        return view('admin/resume',compact('myresume'));
    }

      public function skillsec()
    {
      $myskill= DB::table('skill')->orderBy('id', 'asc')->get();
        return view('admin/skillsec',compact('myskill'));
    }


  public function galarysec()
    {
      $mygalary= DB::table('galary')->orderBy('id', 'asc')->get();
        return view('admin/galarysec',compact('mygalary'));
    }


 public function servicessec()
    {
      $myservice= DB::table('service')->orderBy('id', 'asc')->get();
        return view('admin/servicessec',compact('myservice'));
    }


     public function testimonialsec()
    {
      $mytestimonial= DB::table('testimonial')->orderBy('id', 'asc')->get();
        return view('admin/testimonial',compact('mytestimonial'));
    }


   public function homepagesetting()
    {
      $homesetting = DB::table('websitesetting')->where('id','1')->orderBy('id', 'asc')->get();
        return view('admin/homepagesetting',compact('homesetting'));
    }


       public function socialicons()
    {
      $mysocial= DB::table('social')->orderBy('id', 'asc')->get();
        return view('admin/socialicons',compact('mysocial'));
    }



    public function submitslider(Request $request,$id)
    {
            
     $request->validate([
        'slidertext1' => 'required',
        'slidertext2' => 'required',
        'slidertext3' => 'required',
        'sliderbtntext' => 'required',
        'sliderbtnurl' => 'required',
        'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'paylogo1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'paylogo2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'paylogo3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'paylogo4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'paylogo5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        
        
    ]);


        $slidertext= slidermodel::find($id);
        $slidertext->slidetext1 = $request->slidertext1;
        $slidertext->slidetext2 = $request->slidertext2;
        $slidertext->slidetext3 = $request->slidertext3;
        $slidertext->slidebtnnam = $request->sliderbtntext;
        $slidertext->slidebtnurl = $request->sliderbtnurl;
        

         if ($request->hasFile('image')) {
        if (File::exists('images/'.$slidertext->image)) {
            File::delete('images/'. $slidertext->image);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','sliderimg').'.'. $request->image->getClientOriginalExtension(); // rename image
                $request->image->move($location, $filename);
               
              
                 $slidertext->slideimage =$filename;
               
            }



             if ($request->hasFile('logo')) {
        if (File::exists('images/'.$slidertext->logo)) {
            File::delete('images/'. $slidertext->logo);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','sliderlogo').'.'. $request->logo->getClientOriginalExtension(); // rename image
                $request->logo->move($location, $filename);
               
              
                 $slidertext->logo =$filename;
               
            }




              if ($request->hasFile('paylogo1')) {
        if (File::exists('images/'.$slidertext->paylogo1)) {
            File::delete('images/'. $slidertext->paylogo1);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','paylogo1').'.'. $request->paylogo1->getClientOriginalExtension(); // rename image
                $request->paylogo1->move($location, $filename);
               
              
                 $slidertext->paylogo1 =$filename;
               
            }
            


             if ($request->hasFile('paylogo2')) {
        if (File::exists('images/'.$slidertext->paylogo2)) {
            File::delete('images/'. $slidertext->paylogo2);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','paylogo2').'.'. $request->paylogo2->getClientOriginalExtension(); // rename image
                $request->paylogo2->move($location, $filename);
               
              
                 $slidertext->paylogo2 =$filename;
               
            }
     


       if ($request->hasFile('paylogo3')) {
        if (File::exists('images/'.$slidertext->paylogo3)) {
            File::delete('images/'. $slidertext->paylogo3);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','paylogo3').'.'. $request->paylogo3->getClientOriginalExtension(); // rename image
                $request->paylogo3->move($location, $filename);
               
              
                 $slidertext->paylogo3 =$filename;
               
            }


             if ($request->hasFile('paylogo4')) {
        if (File::exists('images/'.$slidertext->paylogo4)) {
            File::delete('images/'. $slidertext->paylogo4);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','paylogo4').'.'. $request->paylogo4->getClientOriginalExtension(); // rename image
                $request->paylogo4->move($location, $filename);
               
              
                 $slidertext->paylogo4 =$filename;
               
            }



             if ($request->hasFile('paylogo5')) {
        if (File::exists('images/'.$slidertext->paylogo5)) {
            File::delete('images/'. $slidertext->paylogo5);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','paylogo5').'.'. $request->paylogo5->getClientOriginalExtension(); // rename image
                $request->paylogo5->move($location, $filename);
               
              
                 $slidertext->paylogo5 =$filename;
               
            }





        $slidertext->update();
       return redirect()->route('slidesection')->with('status', ' Student Add success !');

        
    }






    public function submitexperience(Request $request)
    {
            
     $request->validate([
        'icon' => 'required',
        'exname' => 'required',  
           
      ]);


        $slidertext= new experiencemodel();
        $slidertext->icon = $request->icon;
        $slidertext->exname = $request->exname;

     
    

        $slidertext->save();
    
        return redirect()->route('experiencesection')->with('status', ' Data Add success !');

        
    }


 public function deleteexperience(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=experiencemodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('experiencesection')->with('status', ' Data delete success !');

        
    }


    public function aboutmesubmit(Request $request,$id)
    {
            
     $request->validate([
        'title1' => 'required',
        'title2' => 'required',
        'downloadcv' => 'required',
        'des' => 'required',  
                  
      ]);


        $aboutmesubmit= aboutmodel::find($id);
        $aboutmesubmit->title1 = $request->title1;
        $aboutmesubmit->title2 = $request->title2;
         $aboutmesubmit->downloadcv = $request->downloadcv;
        $aboutmesubmit->des = $request->des;
       


         if ($request->hasFile('image')) {
        if (File::exists('images/'.$aboutmesubmit->image)) {
            File::delete('images/'. $aboutmesubmit->image);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','aboutimage').'.'. $request->image->getClientOriginalExtension(); // rename image
                $request->image->move($location, $filename);
               
              
                 $aboutmesubmit->image =$filename;
               
            }

      
    

        $aboutmesubmit->update();
        return redirect()->route('aboutmesec')->with('status', ' Data Add success !');

        
    }





    public function aboutmeintro(Request $request)
    {
            
     $request->validate([
        'title1' => 'required',
        'title2' => 'required',     
      ]);


        $slidertext= new aboutintromodel();
        $slidertext->title1 = $request->title1;
        $slidertext->title2 = $request->title2;
      
    

        $slidertext->save();
        return redirect()->route('aboutmesec')->with('status', ' Data Add success !');

        
    }



      public function submitresume(Request $request)
    {
            
     $request->validate([
        'exname' => 'required',
        'institute' => 'required',  
        'duration' => 'required',
        'type' => 'required',      
      ]);


        $slidertext= new resumemodel();
        $slidertext->exname = $request->exname;
        $slidertext->institute = $request->institute;
         $slidertext->duration = $request->duration;
        $slidertext->type = $request->type;
    

        $slidertext->save();
        return redirect()->route('resumesec')->with('status', ' Data Add success !');

        
    }


public function deleteresume(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=resumemodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('resumesec')->with('status', ' Data delete success !');

        
    }



 public function aboutmeintrodelete(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=aboutintromodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('aboutmesec')->with('status', ' Data delete success !');

        
    }



     public function submitskill(Request $request)
    {
            
     $request->validate([
        'skillname' => 'required',
        'parcen' => 'required',  
        'color' => 'required',
        'section' => 'required',      
      ]);


        $slidertext= new skillmodel();
        $slidertext->skillname = $request->skillname;
        $slidertext->parcen = $request->parcen;
         $slidertext->color = $request->color;
        $slidertext->section = $request->section;
    

        $slidertext->save();
        return redirect()->route('skillsec')->with('status', ' Data Add success !');

        
    }



public function deleteskill(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=skillmodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('skillsec')->with('status', ' Data delete success !');

        
    }


     public function submitgalary(Request $request)
    {
            
     $request->validate([
        'title' => 'required',
        'des' => 'required',  
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',   
      ]);


        $slidertext= new galarymodel();
        $slidertext->title = $request->title;
        $slidertext->des = $request->des;


          if ($request->hasFile('image')) {
        if (File::exists('images/'.$slidertext->image)) {
            File::delete('images/'. $slidertext->image);
        }
                $location = public_path('images/');
               
                $filename = 'galary'.time().'.'. $request->image->getClientOriginalExtension(); // rename image
                $request->image->move($location, $filename);
               
              
                 $slidertext->image =$filename;
               
            }
       
    

        $slidertext->save();
        return redirect()->route('galarysec')->with('status', ' Data Add success !');

        
    }


public function deletegalary(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=galarymodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('galarysec')->with('status', ' Data delete success !');

        
    }

 public function submitservice(Request $request)
    {
            
     $request->validate([
        'firstservicename' => 'required',
        'lastservicename' => 'required',  
        'icon' => 'required', 
      ]);


        $slidertext= new servicemodel();
        $slidertext->firstservicename = $request->firstservicename;
        $slidertext->lastservicename = $request->lastservicename;
        $slidertext->icon = $request->icon;

    
    

        $slidertext->save();
        return redirect()->route('servicessec')->with('status', ' Data Add success !');

        
    }



public function deleteservice(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=servicemodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('servicessec')->with('status', ' Data delete success !');

        
    }



  public function submittestimonial(Request $request)
    {
            
     $request->validate([
        'name' => 'required',
        'designation' => 'required',  
        'des' => 'required', 
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',   
      ]);


        $slidertext= new testimonialmodel();
        $slidertext->name = $request->name;
        $slidertext->designation = $request->designation;
        $slidertext->des = $request->des;


          if ($request->hasFile('image')) {
        if (File::exists('images/'.$slidertext->image)) {
            File::delete('images/'. $slidertext->image);
        }
                $location = public_path('images/');
               
                $filename = 'testimonial'.time().'.'. $request->image->getClientOriginalExtension(); // rename image
                $request->image->move($location, $filename);
               
              
                 $slidertext->image =$filename;
               
            }
       
    

        $slidertext->save();
        return redirect()->route('testimonialsec')->with('status', ' Data Add success !');

        
    }



public function deletetestimonial(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=testimonialmodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('testimonialsec')->with('status', ' Data delete success !');

        
    }






    public function submithomepagesetting(Request $request,$id)
    {
            
     $request->validate([
        'webtitle' => 'required',
        'keyword' => 'required',
        'des' => 'required',
        'footerdes' => 'required',  
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',   
                  
      ]);


        $aboutmesubmit= websettingmodel::find($id);
        $aboutmesubmit->webtitle = $request->webtitle;
        $aboutmesubmit->keyword = $request->keyword;
         $aboutmesubmit->des = $request->des;
        $aboutmesubmit->footerdes = $request->footerdes;
       


         if ($request->hasFile('image')) {
        if (File::exists('images/'.$aboutmesubmit->image)) {
            File::delete('images/'. $aboutmesubmit->image);
        }
                $location = public_path('images/');
               
                $filename = str_replace(' ','','siteicon').'.'. $request->image->getClientOriginalExtension(); // rename image
                $request->image->move($location, $filename);
               
              
                 $aboutmesubmit->image =$filename;
               
            }

      
    

        $aboutmesubmit->update();
        return redirect()->route('homepagesetting')->with('status', ' Data Add success !');

        
    }




public function updateexperiencedu(Request $request,$id)
    {
            
     $request->validate([
        'exduration' => 'required',
        'extitle' => 'required',
       
                  
      ]);


        $aboutmesubmit= websettingmodel::find($id);
        $aboutmesubmit->exduration = $request->exduration;
        $aboutmesubmit->extitle = $request->extitle;
     
       


      
    

        $aboutmesubmit->update();
        return redirect()->route('experiencesection')->with('status', ' Data Update success !');

        
    }



 public function submitsocialicons(Request $request)
    {
            
     $request->validate([
        'iconcode' => 'required',
        'iconurl' => 'required', 
      ]);


        $slidertext= new socialmodel();
        $slidertext->iconcode = $request->iconcode;
        $slidertext->iconurl = $request->iconurl;


    
    

        $slidertext->save();
        return redirect()->route('socialicons')->with('status', ' Data Add success !');

        
    }




public function deletesocialicons(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=socialmodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->route('socialicons')->with('status', ' Data delete success !');

        
    }





 



}
