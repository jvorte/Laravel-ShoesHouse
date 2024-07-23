<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    // contact form
    public function contact(Request $request){
        if ($request->method() == 'POST') {
            $message = new Store();
              
           $message->name = $request->get('name');     
           $message->lastname = $request->get('lastname'); 
           $message->email = $request->get('email');    
           $message->message = $request->get('message');
           $message->city = $request->get('city');
           $message->state = $request->get('state');
           $message->zip = $request->get('zip');
           $message->save();
      
     
           $message->save();
           return redirect('home');
        }
        return view('contact');
    }

  

}
