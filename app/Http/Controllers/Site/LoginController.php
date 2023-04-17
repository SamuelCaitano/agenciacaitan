<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CompanyModel;
use App\Models\LoggedModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use App\Models\UserProfileModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LoginController extends Controller
{ 
  function index()
  { 
    $company = CompanyModel::select('fantasy_name', 'cover_login', 'copy', 'logo', 'instagram', 'facebook', 'cel_number_one', 'linkedin')  
    ->get()->first();    

    $data = ['title' => 'Login', 'action' => '/login/signIn', 'company' => $company]; 
 
    return view('admin.login')->with($data);
  }

  // método para criar novo usuário
  public function signUp(Request $request) {
        
  }

  // metodo para fazer a autenticação de login
  public function signIn(Request $request)
  {  
    $credentials = $request->validate([
      'login' => ['required' => 'min:5'],
      'password' => ['required']
    ]);

    $credentials = [
      'password' => $request->get('password'),
    ];

    // verificar o que está vindo do login
    $credentials[filter_var($request->get('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username'] = $request->get('login'); 
    
    // realiza uma tentativa de autenticação
    if (Auth::attempt($credentials)) { 
      $this->logged(Auth::user(), $request->local); 
      return redirect()->intended('/admin');
    } 

    // retorna para a tela de login
    return redirect()->back()->withInput($request->only($request->old('login')));
  }

  // funcao que realiza o logout
  function signOut()
  {
    DB::table('logged')->where('email', '=', Auth::user()->email)->delete();
    Auth::logout();

    return redirect('/login');
  }

  // salvando dados dos usuarios logados no DB
  public function logged($user, $local){   

    $user = UserModel::select('id', 'firstName', 'secondName', 'email', 'photo')->where('email', '=', $user->email)->get()->toArray();  

    $userOn = LoggedModel::where('email', '=', $user[0]['email'])->get(); 

    if(!empty($userOn[0]['email'])){
      $data = array(
        'name' => $user[0]['firstName'] . " " . $user[0]['secondName'], 
        'email' => $user[0]['email'], 
        'photo' => $user[0]['photo'],
        'local' => $local,
        'updated_at' => date('Y-m-d G:i:s')
      );
      
      DB::table('logged')->where('email', '=', $user[0]['email'])->update($data);      

    } else {
      LoggedModel::create([
        'id' => Str::uuid(),
        'name' => $user[0]['firstName'] . " " . $user[0]['secondName'],
        'email' => $user[0]['email'],
        'photo' => $user[0]['photo'],
        'local' => $local
      ]); 
    }   
  }
}
