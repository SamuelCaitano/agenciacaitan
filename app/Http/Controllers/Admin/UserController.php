<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\CompanyModel;
use App\Models\UserModel;
use App\Models\UserProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 

class UserController extends AdminController
{
  protected $model = UserModel::class;

  // listagem dos usuarios e atributos do form
  function list() {
    $company = CompanyModel::get(); 
    $users = UserModel::orderBy('firstName')->get();
 
    $data = ['sectionMenu' => 'Empresa', 'pageMenu' => 'Configurações', 'company' => $company, 'users' => $users];

    // dd($data); 
 
    return view('admin.pages.user.list')->with($data);
     
  }

  // funcao para salvar
  function save(Request $request) {
		$dataModel = (object) parent::save($request)->toArray();
		$dataModel->user_profile = UserProfileModel::find($dataModel->user_profile_id);

		return $dataModel;
	}
 
  public function store(Request $request) {
    $user = new UserModel; 

    $user->id = Str::uuid()->toString();
    $user->firstName = $request->firstName;
    $user->secondName = $request->secondName;
    $user->username = $request->username;
    $user->bornDate = $request->bornDate;
    $user->email = $request->email;
    $user->photo = $request->photo;
    $user->cover = $request->cover; 
    $user->cep = $request->cep;
    $user->address = $request->address;
    $user->numAddress = $request->numAddress;
    $user->city = $request->city;
    $user->neighbourhood = $request->neighbourhood;
    $user->state = $request->state;
    $user->country = $request->country;
    $user->complement = $request->complement;
    $user->keyPix = $request->keyPix;
    $user->namePix = $request->namePix;
    $user->whatsapp = $request->whatsapp;
    $user->linkedin = $request->linkedin;
    $user->facebook = $request->facebook;
    $user->instagram = $request->instagram;
    $user->twitter = $request->twitter;
    $user->password = $request->password; 
    $user->user_profile_id = $request->user_profile_id;

    dd($user);

    $user->save();

    return redirect()->back();
  }
  
  

}