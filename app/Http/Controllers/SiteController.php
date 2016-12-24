<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class SiteController extends Controller
{
    public function index()
    {
        $seccion        ="Inicio";
        $metaTitle      ="Rostería de Café";
        $metaContent 	="Rostería de Café"; 
       	$metaDescription="XXXX";
        $metaKeywords   ="XXXX";
        
        return view('welcome')
        	->with('seccion'	, $seccion)
            ->with('metaTitle'      , $metaTitle)
            ->with('metaContent'      , $metaTitle)
            ->with('metaDescription'    , $metaDescription)
    		->with('metaKeywords'		, $metaKeywords);
    }


    public function nosotros()
    {
        $seccion        ="La Rostería";
        $metaTitle      ="Rostería de Café";
        $metaContent 	="Rostería de Café"; 
       	$metaDescription="XXXX";
        $metaKeywords   ="XXXX";
        return view('nosotros')
        	->with('seccion'	, $seccion)
            ->with('metaTitle'      , $metaTitle)
            ->with('metaContent'      , $metaTitle)
            ->with('metaDescription'    , $metaDescription)
    		->with('metaKeywords'		, $metaKeywords);
    }


    public function servicios()
    {
        $seccion        ="Servicios";
        $metaTitle      ="Rostería de Café";
        $metaContent    ="Rostería de Café"; 
        $metaDescription="XXXX";
        $metaKeywords   ="XXXX";
        return view('servicios')
            ->with('seccion'    , $seccion)
            ->with('metaTitle'      , $metaTitle)
            ->with('metaContent'      , $metaTitle)
            ->with('metaDescription'    , $metaDescription)
            ->with('metaKeywords'       , $metaKeywords);
    }


    public function academia()
    {
        $seccion        ="Academia";
        $metaTitle      ="Rostería de Café";
        $metaContent    ="Rostería de Café"; 
        $metaDescription="XXXX";
        $metaKeywords   ="XXXX";
        return view('academia')
            ->with('seccion'    , $seccion)
            ->with('metaTitle'      , $metaTitle)
            ->with('metaContent'      , $metaTitle)
            ->with('metaDescription'    , $metaDescription)
            ->with('metaKeywords'       , $metaKeywords);
    }

    public function contacto()
    {
        $seccion        ="Contacto";
        $metaTitle      ="Rostería de Café";
        $metaContent    ="Rostería de Café"; 
        $metaDescription="XXXX";
        $metaKeywords   ="XXXX";
        return view('contacto')
            ->with('seccion'    , $seccion)
            ->with('metaTitle'      , $metaTitle)
            ->with('metaContent'      , $metaTitle)
            ->with('metaDescription'    , $metaDescription)
            ->with('metaKeywords'       , $metaKeywords);
    }


    public function send()
    {

        $rules = array(
            'name'                  => 'required',
            'email'                 => 'email|required',
            'phone'                 => 'required',
            'message'               => 'required'  
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('contacto')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }else{

            $data['name']                       = Input::get('name');
            $data['email']                      = Input::get('email');
            $data['phone']                      = Input::get('phone');
            $data['elmessage']                  = Input::get('message');

            Mail::send('emails.contacto', $data, function($message){
                $message
                    ->to(Input::get('email'), Input::get('name'))
                    ->bcc(\Config::get('settings.contactoEmail'), \Config::get('settings.contactoNombre'))
                    ->subject('Nuevo contacto desde '.\Config::get('settings.sitename'));
            });

            /*
                Mail::send('emails.forgotForm', array(
                                                    'nuevaClave'        =>$nuevaClave, 
                                                    'emailUsr'          =>$emailUsr,
                                                    'nombres'           =>$nameUsr,
                                                    ), function($messageSend) use ($nameUsr, $emailUsr){
                
                $messageSend->to(Config::get('settings.emailFrom'), Config::get('settings.sitename'))
                            ->bcc($emailUsr, $nameUsr)
                            ->from(Config::get('settings.emailFrom'), Config::get('settings.sitename'))
                            ->replyTo($emailUsr, $nameUsr)
                            ->subject('Olvido password - '.Config::get('settings.sitename'));
                });
            */


            return Redirect::to('/contacto');


        }



        // process the login \

            
        }

    
  }




