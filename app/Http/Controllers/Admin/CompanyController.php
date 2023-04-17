<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\CompanyModel;
use App\Models\LoggedModel;
use App\Models\UserModel; 
use Illuminate\Http\Request; 

class CompanyController extends AdminController
{
    protected $model = CompanyModel::class;
    protected $users = UserModel::class;

    function index()
  {
    $company = $this->model::get(); 
    // $users = $this->users::select('id', 'firstName', 'secondName', 'photo', 'is_online')->where('is_online', '=', 1)->orderBy('firstName')->get();
    $logged = LoggedModel::get()->all(); 
 
    $data = ['sectionMenu' => 'Empresa', 'pageMenu' => 'Configurações', 'company' => $company, 'logged' => $logged];
    
    return view('admin.pages.company.configCompany')->with($data);
  }

  // funcao para salvar
  function update(Request $request) {  
    
    $company = CompanyModel::find($request->id);

    // dd($company);

    $data =  CompanyModel::class::where('id', "=" , $request->id)->get(['logo', 'favicon', 'photo', 'cover', 'cover_login']);
    

    if($request->logo) {  
      $fileNameLogo = $this->generateFileName($request->id, $request->logo); 
      $request['logo'] = $request->logo->storeAs('company/logo', $fileNameLogo);   
    } else { 
      $fileNameLogo = $data[0]['logo']; 
    }    

    if($request->favicon) {  
      $fileNameFavicon = $this->generateFileName($request->id, $request->favicon); 
      $request['favicon'] = $request->favicon->storeAs('company/favicon', $fileNameFavicon);       
    } else {  
      $fileNameFavicon = $data[0]['favicon']; 
    } 

    if($request->photo) {  
      $fileNamePhoto = $this->generateFileName($request->id, $request->photo); 
      $request['photo'] = $request->photo->storeAs('company/profile', $fileNamePhoto);       
    } else {     
      $fileNamePhoto = $data[0]['photo']; 
    }     

    if($request->cover) {       
      $fileNameCover = $this->generateFileName($request->id, $request->cover);  
      $request['cover'] = $request->cover->storeAs('company/profile', $fileNameCover);       
    } else {         
      $fileNameCover = $data[0]['cover']; 
    }  

    if($request->cover_login) {       
      $fileNameCoverLogin = $this->generateFileName($request->id, $request->cover_login);  
      $request['cover_login'] = $request->cover_login->storeAs('company/cover', $fileNameCoverLogin);       
    } else {         
      $fileNameCoverLogin = $data[0]['cover_login']; 
    }  

    if($request->cover_share) {       
      $fileNameCoverShare = $this->generateFileName($request->id, $request->cover_share);  
      $request['cover_share'] = $request->cover_share->storeAs('company/cover', $fileNameCoverShare);       
    } else {         
      $fileNameCoverShare = $data[0]['cover_share']; 
    } 
    
    $company->update([
      $company->fantasy_name = $request->fantasy_name,
      $company->business_name = $request->business_name, 
      $company->cnpj = $request->cnpj, 
      $company->logo = $fileNameLogo,  
      $company->favicon = $fileNameFavicon, 
      $company->photo = $fileNamePhoto, 
      $company->cover = $fileNameCover, 
      $company->cover_login = $fileNameCoverLogin, 
      $company->cover_share = $fileNameCoverShare, 
      $company->email = $request->email, 
      $company->description = $request->description, 
      $company->copy = $request->copy, 
      $company->cel_number_one = $request->cel_number_one, 
      $company->cel_number_two = $request->cel_number_two , 
      $company->business_nihces = $request->business_nihces, 
      // // endereco
      $company->cep = $request->cep, 
      $company->address = $request->address, 
      $company->numAddress = $request->numAddress, 
      $company->city = $request->city, 
      $company->neighbourhood = $request->neighbourhood, 
      $company->state = $request->state, 
      $company->country = $request->country, 
      $company->complement = $request->complement, 				
      // // links importantes
      $company->url = $request->url, 
      $company->google_analytics = $request->google_analytics, 
      $company->gtm = $request->gtm, 
      // // redes sociais
      $company->instagram = $request->instagram, 
      $company->facebook = $request->facebook, 
      $company->youtube = $request->youtube, 
      $company->telegram = $request->telegram, 
      $company->linkedin = $request->linkedin, 
      $company->twitter = $request->twitter, 
      $company->tiktok = $request->tiktok, 
      $company->behance = $request->behance,  
      $company->drive = $request->drive, 
      $company->github = $request->github, 
      $company->dribbble = $request->dribbble, 
      // // pagamento
      $company->keyPix = $request->keyPix, 
      $company->namePix = $request->namePix,
    ]); 
 
    sleep(1);
   return redirect()->route('company.index')
   ->with('status', 'sucess')
   ->with('url', '/admin/company');
      
	}

  function generateFileName($id, $file) {
    return date('d-m-Y-i-s') . "_{$id}" . "_" . strtolower(str_replace(" ", "-", pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))) . ".webp";
  }
}
