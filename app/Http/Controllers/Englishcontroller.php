<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\dialoguemodel;
use App\Models\mydialogmodel;
use DB;
use File;

class Englishcontroller extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
    }



   public function dialogue_panel()
    {
    
        $dialogdata = DB::table('dialogue')->where('type','dialogue')->orderBy('priority', 'asc')->paginate(30);
        return view('admin/dialogue_panel',compact('dialogdata'));
    }



  public function sentence_panel()
    {
    
        $dialogdata = DB::table('dialogue')->where('type','sentence')->orderBy('priority', 'asc')->paginate(30);
        return view('admin/sentence',compact('dialogdata'));
    }



 public function grammar_panel()
    {
    
        $dialogdata = DB::table('dialogue')->where('type','grammar')->orderBy('priority', 'asc')->paginate(30);
        return view('admin/grammar_panel',compact('dialogdata'));
    }



 public function quiz_panel()
    {
    
        $dialogdata = DB::table('dialogue')->where('type','quiz')->orderBy('priority', 'asc')->paginate(30);
        return view('admin/quiz',compact('dialogdata'));
    }







 public function app_login(Request $request)
    {



      

         $checkstudents = DB::table('users')->where('email',$request->email)->where('status','1')->first();

         if ($checkstudents) {

             if (Hash::check($request->password,$checkstudents->password)) {
                 return ['success'=>'1','schoolcode'=>'11','id'=>$checkstudents->id];
             }else{
                 return ['success'=>'2','schoolcode'=>'0','id'=>'0'];
             }


         }else{
            return ['success'=>'3','schoolcode'=>'0','id'=>'0'];
         }


        

              
             

            

         
      
    }



 public function submit_dialogue(Request $request)
    {
            
     $request->validate([
        'dialoguename' => 'required',
        'characterone' => 'required', 
        'charactertwo' => 'required',
        'priority' => 'required||int'
      ]);


        $slidertext= new dialoguemodel();
        $slidertext->dialoguename = $request->dialoguename;
        $slidertext->characterone = $request->characterone;
        $slidertext->charactertwo = $request->charactertwo;
        $slidertext->priority = $request->priority;
        $slidertext->status = "0";
        $slidertext->type = $request->type;


    
    

        $slidertext->save();
        return redirect()->back()->with('status', ' Data Add success !');

        
    }



 
 public function update_dialogue(Request $request)
    {
            
     $request->validate([
        'dialoguename' => 'required',
        'characterone' => 'required', 
        'charactertwo' => 'required',
        'priority' => 'required||int'
      ]);


        $slidertext=dialoguemodel::find($request->id);
        $slidertext->dialoguename = $request->dialoguename;
        $slidertext->characterone = $request->characterone;
        $slidertext->charactertwo = $request->charactertwo;
        $slidertext->priority = $request->priority;
        $slidertext->status = $request->status;


    
    

        $slidertext->update();
        return redirect()->back()->with('status', ' Data Add success !');

        
    }





     public function delete_dialogue(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=dialoguemodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->back()->with('status', ' Data delete success !');

        
    }



 


    public function mydialogue($id)
    {
    
        $dialogdata = DB::table('dialogue')->where('id',$id)->orderBy('priority', 'asc')->get();
        $mydialogdata = DB::table('mydialogue')->where('dialogid',$id)->get();
        return view('admin/mydialogue',compact('dialogdata','mydialogdata'));
    }


  public function single_quiz($id)
    {
    
        $dialogdata = DB::table('dialogue')->where('id',$id)->orderBy('priority', 'asc')->get();
        $mydialogdata = DB::table('mydialogue')->where('dialogid',$id)->get();
        return view('admin/single_quiz',compact('dialogdata','mydialogdata'));
    }






 public function submit_mydialogue(Request $request)
    {
            
     $request->validate([
        'character' => 'required',
        'dialogenglish' => 'required', 
        'dialogbangla' => 'required'
      ]);


        $slidertext= new mydialogmodel();
        $slidertext->dialogid = $request->dialogid;
        $slidertext->character = $request->character;
        $slidertext->dialogenglish = $request->dialogenglish;
        $slidertext->dialogbangla = $request->dialogbangla;
        if (isset($request->type)) {
            $slidertext->type = $request->type;
        }else{
            $slidertext->type = "dialogue";
        }

         if (isset($request->status)) {
            $slidertext->status = $request->status;
        }else{
            $slidertext->status = "0";
        }
        


    
    

        $slidertext->save();
        return redirect()->back()->with('status', ' Data Add success !');

        
    }

 

 public function delete_mydialogue(Request $request)
    {
            
     $request->validate([
        'id' => 'required',  
      ]);


        $slidertext=mydialogmodel::findorFail($request->id);


        $slidertext->delete();
        return redirect()->back()->with('status', ' Data delete success !');

        
    }





    public function edit_mydialogue(Request $request)
    {
            
     $request->validate([
        'character' => 'required',
        'dialogenglish' => 'required', 
        'dialogbangla' => 'required'
      ]);


        $slidertext= mydialogmodel::find($request->id);
        $slidertext->character = $request->character;
        $slidertext->dialogenglish = $request->dialogenglish;
        $slidertext->dialogbangla = $request->dialogbangla;

          if (isset($request->type)) {
            $slidertext->type = $request->type;
        }

         if (isset($request->status)) {
            $slidertext->status = $request->status;
        }


    
    

        $slidertext->update();
        return redirect()->back()->with('status', ' Data Add success !');

        
    }








}
