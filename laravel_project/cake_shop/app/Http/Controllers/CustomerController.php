<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\LogiMail;

use RealRashid\SweetAlert\Facades\Alert;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('website.signup');
     
    }
    public function login()
    {
      
        return view('website.login');
     
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('website.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
       $data=new customer;

       $data->name=$request->name;
       $data->email=$request->email;
       $data->mobile=$request->mobile;  
       $data->password=Hash::make($request->password);
       $data->image = 'default.png';

       
       $data->save();

    

         Alert::success('Success', 'Signup successfully');
       return redirect('/login');

    }

    //---auth_login function---

    public function auth_login(Request $request)
    {
       $data = customer::where('email',$request->email)->first();
       if($data)
        {
        if(Hash::check($request->password,$data->password))
            {
           if ($data->status == "Unblock") {

            // session create   
                Session()->put('cname', $data->name);  // $_SESSION['cname']=$data->name
                Session()->put('cid', $data->id);
                Session()->put('cemail', $data->email);
                Session()->put('cmobile', $data->mobile);
                Session()->put('cimage', $data->image);

                Alert::success('Success', 'Login successfully');
                return redirect('/');

            } else {
                Alert::warning('Login Failed', ' due to Blocked Account');
                return redirect('/web_login');
                }
            }
                else {
                     Alert::warning('Login Failed', ' due to wrong password');
                    return redirect('/web_login');
            }

        } else {
            Alert::warning('Login Failed', ' due to wrong email');
                return redirect('/web_login');
       }
    }

     public function cust_logout()
    {

        Session()->pull('cid');
        Session()->pull('cname');
        Session()->pull('cemail');
        Session()->pull('cmobile');
        Session()->pull('cimage');
      
        return redirect('/')->with('logout_success', 'You have been logged out successfully!');

    
    }


     public function status_customers(customer $customer, $id)
    {
        $data = customer::find($id);
        $status = $data->status;
        if ($status == "Block") {
            $data->status = "Unblock";
            $data->update();
            Alert::success('Customer', 'Status Unblock Successfully');
            return back();
        } else {
            
            Session()->pull('cid');
            Session()->pull('cname');
            Session()->pull('cemail');
            Session()->pull('cmobile');
            Session()->pull('cimage');

            $data->status = "Block";
            $data->update();
            Alert::success('Customer', 'Status Block Successfully');
            return back();
        }
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
       $data=$customer::all();
        return view('admin.customer',["customer"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */

     public function my_profile(customer $customer)
    {
        $data=$customer::find(session()->get('cid'));
        return view('website.profile',["customer"=>$data]); 
    }



    public function edit(customer $customer,$id)
    {
        $data = customer::find($id);
        return view('website.update_profile', ["customer"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer,$id)
    {
       {
       $data=customer::find($id);

       $data->name=$request->name;
       $data->email=$request->email;
       $data->mobile=$request->mobile; 

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time().'_img.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/customer'), $filename);
        $data->image = $filename;
    }
        
      
       
       $data->update();

        Alert::success('success', 'profile Updeted successfully!');
       return redirect('/my_profile');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer,$id)
    {
       $data=customer::find($id);
        $del_data=$data->name;
        $data->delete();
        Alert::success('Deleted', 'Customer Data has been deleted successfully');
        return back()->with('delete', $del_data);
    }
}
