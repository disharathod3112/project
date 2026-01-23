<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('admin.admin-login');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    //---auth_login function---

    public function admin_auth_login(Request $request)
{
    $data = admin::where('email', $request->email)->first();

    if ($data) {
        if (Hash::check($request->password, $data->password)) {

             // session create
                Session()->put('aname', $data->name);  // $_SESSION['cname']=$data->name
                Session()->put('aid', $data->id);
                Session()->put('aid', $data->email);
                Session()->put('aid', $data->image);


            Alert::success('Success', 'Login successfully');
                return redirect('/dashboard');
        } else {
            Alert::warning('Login Failed', ' due to wrong password');
                    return redirect('/admin-login');
        }
    } else {
       Alert::warning('Login Failed', ' due to wrong email');
                return redirect('/admin-login');
    }
}

     public function admin_logout()
    {

        Session()->pull('aid');
        Session()->pull('aname');
         Session()->pull('aemail');
          Session()->pull('aimage');
        
        return redirect('/admin-login');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
         $data=$admin::find(session()->get('aid'));
         return view('admin.profile',["admin"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
