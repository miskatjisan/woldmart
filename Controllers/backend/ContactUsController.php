<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact_Us;
use Carbon\Carbon;

class ContactUsController extends Controller
{
    
    
    public function Store_Contact(Request $request){

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',

        ],[
            'name.required' => 'Input Your Name',
            'email.required' => 'Input email  Address',
            'comment.required' => 'Input Message  ',
        ]);

        Contact_Us::insert([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Thanks for Communication',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);



    }





}
