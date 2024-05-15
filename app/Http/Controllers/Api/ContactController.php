<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\ContactEmail;
use App\Models\Contact;
use App\Jobs\SendEmail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        try{
            if(event(new ContactEmail($user)))
            {
                Contact::create($user);
                return response()->json(['status'=>1,'msg'=>'Mail Send Successfully']);
            }
        }catch(\Exception $e){
            return 'Mail Is Not Send Proper';
        }
        
        
    }
}
