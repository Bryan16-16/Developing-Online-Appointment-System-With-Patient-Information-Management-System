<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Models\user;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function patientHome()
    {
        return view('patient.patientHome',['dashboard_title' => 'PATIENT']);
    } 

    function patient_setting(){
        $data = ['LoggedUserInfo' => user::where('id', '=', session('LoggedUser'))->first()];
        return view('patient.patientSetting', $data,['dashboard_title' => 'PATIENT ']);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin_dashboard()
    {
        return view('admin.admin_dashboard',['dashboard_title' => 'ADMIN']);
    }
    // aka admin profile
    function admin_setting(){
        $data = ['LoggedUserInfo' => user::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.admin-profile', $data,['dashboard_title' => 'ADMIN ']);
    }
    function admin_doctor(){
        $data = ['LoggedUserInfo' => user::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.admin-doctor', $data,['dashboard_title' => 'ADMIN ']);
    }
    function admin_secretary(){
        $data = ['LoggedUserInfo' => user::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.admin-secretary', $data,['dashboard_title' => 'ADMIN ']);
    }
    function admin_patient(){
        $data = ['LoggedUserInfo' => user::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.admin-patient', $data,['dashboard_title' => 'ADMIN ']);
    }
  

    function admin_landing_page(){
        $data = ['LoggedUserInfo' => user::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.landing_page.admin-landing-page', $data,['dashboard_title' => 'ADMIN ']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function doctorHome()
    {
        return view('doctor.doctorHome',['dashboard_title' => 'DOCTOR']);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function secretaryHome()
    {
        return view('secretary.secretaryHome',['dashboard_title' => 'SECRETARY']);
    }
}