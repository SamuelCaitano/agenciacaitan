<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyModel;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  function index()
  { 
    $company = CompanyModel::class::get(); 

    $data = ['sectionMenu' => 'Home', 'pageMenu' => 'Dashboard', 'company' => $company];

    return view('admin.index')->with($data);
  }
  
  function profile() { 

    // dd(auth()->user()->email);

    $user = DB::table('users')
    ->join('user_profiles AS UP', 'users.user_profile_id', '=',  'UP.id')
    ->select('UP.level','users.*') 
    ->where('users.email', '=', auth()->user()->email)
    ->get()->first();
 
    // dd($user);
    return view('admin.pages.user.profile', ['user' => $user]);
  } 

  function clients(){
    return view('admin.dashboard.pages.clients');
  }
}