<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use App\Mail\generalContact;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function __construct()
    {
        //base url
        $base_url = URL::to('/'); 
        Session::put('base_url',$base_url) ;
        //$base_url = Session::get('base_url');

        //language
        if (Session::has('language')) 
        {
            $language = "";
            $language = Session::get('language');
            if($language =="")
            {
                $language = "en";
                Session::put('language',$language) ;
            }
        }

    }
    public function change_language($lan)
    {
        $pageurl ="";
        if($lan =="en")
        {
            Session::put('language','en') ; 
        }
        else if($lan =="jp"){
            Session::put('language','jp') ;
        }
        //return response()->json('changed');
        return response()->json($lan);
    }
    
    public function get_pageurl($en_url,$jp_url)
    {
        $pageurl ="";
        $language = "";
        $language = Session::get('language'); 
        if($language =="" || $language =="en")
        {
            $language = "en";
            Session::put('language',$language) ; 
            $pageurl  = $en_url;
        }
        else if($language =="jp"){
            $language = "jp";
            Session::put('language',$language) ;
            $pageurl  = $jp_url;
        }

        return $pageurl ;
    }

    public function index()
    {
        $page =$this->get_pageurl('en.welcome','jp.welcome');

        return view($page);
    }

    //plastice_waste_replace
    public function plastice_waste_replace()
    {
        $page =$this->get_pageurl('en.welcome_plastic_waste_replace','jp.welcome_plastic_waste_replace');

        return view($page);
    }

    //contactus
    public function general_contactus(Request $request)
    {
        $page =$this->get_pageurl('en.contactus','jp.contactus');

        $data = [
            'name' => $request->name,
            'email' =>$request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
        try {
            Mail::to('info@woodyltd.com')->send(new generalContact($data));
        } catch (\Throwable $th) {
            throw $th;
        }
        

        $notification=array(
            'message'=>'Mail Sent...',
            'alert-type'=>'success'
        );

        $successmessage ="Mail Sent...";
        //return view($page,compact('successmessage'));
        return redirect()->back()->with($notification);
        
    } 

}
