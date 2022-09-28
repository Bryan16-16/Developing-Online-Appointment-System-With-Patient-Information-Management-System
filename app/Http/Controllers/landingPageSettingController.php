<?php

namespace App\Http\Controllers;

use App\Models\ModellandingPageSetting;
use Illuminate\Http\Request;

class landingPageSettingController extends Controller
{
  
    public function index()
    {
        return view('admin.landing_page.admin-landing-page',['dashboard_title' => 'ADMIN']);
    }

    public function create()
    {
        return view('admin.landing_page.admin-landing-page',['dashboard_title' => 'ADMIN']);


       
    }


    public function store(Request $request)
    {
        $input = $request->all();
        ModellandingPageSetting::create($input);
        return view('admin.landing_page.admin-landing-page',['dashboard_title' => 'ADMIN'])
        ->with('flash_message','Updated Successfully');


//  $userinfo = user::all();
//         return View('admin.admin-secretary',['dashboard_title' => 'ADMIN'])  ->with('userinfo', $userinfo) ;

    }


    public function show(ModellandingPageSetting $modellandingPageSetting)
    {
        //
    }

   
    public function edit(ModellandingPageSetting $modellandingPageSetting)
    {
        //
    }

  
    public function update(Request $request, ModellandingPageSetting $modellandingPageSetting)
    {
        
    }


    public function destroy(ModellandingPageSetting $modellandingPageSetting)
    {
        //
    }
}
