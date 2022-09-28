<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;


class SecretaryDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userinfo = user::all();
        $user = user::all()->where('type', 'admin');
        // return view ('doctor.doctorHome')->with('fname',$fname);
        return View('admin.admin-doctor',['dashboard_title' => 'ADMIN'])  
        ->with('user', $user) ;
        ;
        // ->with('userinfo', $userinfo) ;



    
    }

    public function index1()
    {
        $userinfo = user::all();
        $user = user::all()->where('type', 'user');
        // return view ('doctor.doctorHome')->with('fname',$fname);
        return View('admin.admin-patient',['dashboard_title' => 'ADMIN'])  
        ->with('user', $user) ;
        ;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('doctor.doctorHome');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
