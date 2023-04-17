<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

return new class extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		DB::table('users')->updateOrInsert([
			'username' => 'admin',
		], [
			'id' => Str::uuid(),
			'firstName' => 'Administrador',
			'secondName' => 'Agência',
			'bornDate' => '1999/10/10',
			'email' => 'admin@gmail.com',
			'photo' => 'assets/img/users/photo.jpg',
			'office' => '1',
			'cover' => 'assets/img/users/photo.jpg',
			'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quae tempora doloribus illum, ad consequuntur, fugit necessitatibus laborum tempore deserunt voluptatum ex assumenda! Facere repudiandae?',
			'cep' => 14802020,
			'address' => '',
			'numAddress' => 3245, 
			'city' => 'Araraquara', 
			'neighbourhood' => 'Santa Angelina', 
			'state' => 'SP', 
			'country' => 'Brasil',
			'complement' => 'proximo ao kero kero',
			'keyPix' => '0823016540',
			'namePix' => 'SAMUEL CAITANO DA SILVA', 
			'whatsapp' => '16997792512',
			'linkedin' => 'samucaitano',
			'facebook' => 'samuelcaitanoo',
			'instagram' => 'samucaitano',
			'twitter' => '', 
			'youtube' => '',
			'is_online' => '1',					
			'user_profile_id' => 'eed1f9bf-33ae-4693-bba3-571605482c6d',
			'password' => Hash::make('admin123'),
		]); 

		DB::table('users')->updateOrInsert([
			'username' => 'samucaitano',
		], [
			'id' => Str::uuid(),
			'firstName' => 'Samuel',
			'secondName' => 'Caitano',
			'bornDate' => '1999/10/10',
			'email' => 'smlcaitano@gmail.com',
			'photo' => 'assets/img/users/photo.jpg',
			'office' => '1',
			'cover' => 'assets/img/users/photo.jpg',
			'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quae tempora doloribus illum, ad consequuntur, fugit necessitatibus laborum tempore deserunt voluptatum ex assumenda! Facere repudiandae?',
			'cep' => 14802020,
			'address' => '',
			'numAddress' => 3245, 
			'city' => 'Araraquara', 
			'neighbourhood' => 'Santa Angelina', 
			'state' => 'SP', 
			'country' => 'Brasil',
			'complement' => 'proximo ao kero kero',
			'keyPix' => '0823016540',
			'namePix' => 'SAMUEL CAITANO DA SILVA', 
			'whatsapp' => '16997792512',
			'linkedin' => 'samucaitano',
			'facebook' => 'samuelcaitanoo',
			'instagram' => 'samucaitano',
			'twitter' => '', 
			'youtube' => '',	
			'is_online' => '1',		
			'user_profile_id' => 'eed1f9bf-33ae-4693-bba3-571605482c6d',
			'password' => Hash::make('teste123'),
		]);
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
	}
};
