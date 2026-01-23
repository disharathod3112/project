<?php

namespace App\Http\Controllers;

use App\Mail\contactusmail;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.contactus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('website.contactus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



       $data=new contact;

       $data->name=$request->name;
       $data->email=$request->email;
       $data->mobile=$request->mobile;  
       $data->subject=$request->subject;
       $data->massge=$request->massge;  
       $data->save();

        $name = $data->name;
        $email = $data->email;

        $data = array("name" => $name, "email" => $email);
        Mail::to($email )->send(new contactusmail($data));

        Alert::success('Success', 'Your Message has been sent successfully');
       return back();

    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        $data=$contact::all();
        return view('admin.contact',["contact"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact,$id)
    {
         $data=contact::find($id);
        $del_data=$data->name;
        $data->delete();
        Alert::success('Deleted', 'Contact Data has been deleted successfully');
        return back()->with('delete', $del_data);
    }
}
