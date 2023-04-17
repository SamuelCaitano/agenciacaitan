<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
        DB::table('company')->updateOrInsert([
          'id' => Str::uuid(),
          'fantasy_name' => 'Agência Caitan',
          'business_name'=> 'Agência Caitan LTDA',
          'cnpj' => '082304165400001',
          'logo' => 'assets/img/logo/logo-site.png',
          'favicon' => 'assets/img/logo/favicon.png',
          'photo' => 'assets/img/logo/logotipo-laranja.png',
          'cover' => 'https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
          'cover_login' => 'https://images.unsplash.com/photo-1616763355603-9755a640a287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
          'cover_share' => 'https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
          'email' => 'agenciacaitan@gmail.com',
          'description' => 'Especialista em Marketing',
          'copy' => 'Mundando a forma de como você faz marketing!',
          'cel_number_one' => '16997792512',
          'cel_number_two' => '16997880780',
          'business_nihces' => 'Marketing',
          'cep' => '14802020',
          'address' => 'Av. Joaquim de Souza Pinheiro',
          'numAddress'=> '738',
          'city'=> 'Araraquara',
          'neighbourhood'=> 'Vila Nice',
          'state'=> 'São Paulo',
          'country'=> 'Brasil',
          'complement' => 'Predio',		 
          'url' => 'https://agenciacaitan.com',
          'google_analytics'=> 'Aqui ficara o código do google analitics',
          'gtm'=> 'Aqui ficara o código do google tag manager', 
          'instagram' => 'agenciacaitan',
          'facebook' => 'agenciacaitan',
          'youtube'=> 'agenciacaitan',
          'telegram' => 'agenciacaitan',
          'linkedin'=> 'agenciacaitan',
          'twitter'=> 'agenciacaitan',
          'tiktok'=> 'agenciacaitan',
          'behance'=> 'behance', 
          'dribbble'=> 'dribbble',
          'drive'=> 'mega',
          'github' => 'SamuelCaitano', 
          'keyPix' => '08230416540',
          'namePix' => 'SAMUEL CAITANO DA SILVA', 

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
