<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{ 
    public function up()
    {
        DB::table('clients')->updateOrInsert([
            'id' => Str::uuid(),
            'name' => 'Lojas Base',
            'username' => 'Lojas Base',
            'natural_person' => false,
            'legal_person' => true,
            'cpf' => 0,
            'cnpj' => 00000000000,
            'photo' => '',
            'email' => 'lojas@example.com',
            'description' => 'Loja de ecommerce com os melhores produtos do Brasil',
            'copy' => 'Compre e receba hoje mesmo',
            'cel_number_one' => 16997792512,
            'cel_number_two' => 0,
            'business_nihces' => 'Ecommerce',
            // links importantes
            'site' => 'lojasbase.com',
            'google_analytics' => '',
            'gtm' => '',
            // redes sociais
            'instagram' => 'lojasbase.com',
            'facebook' => 'lojasbase.com',
            'youtube' => 'lojasbase.com',
            'linkedin' => 'lojasbase.com',
            'twitter' => 'lojasbase.com',
            'tiktok' => 'lojasbase.com',
            // serviços
            'facebook_ads' => '',
            'google_ads' => '',
            'mentoria_ecommerce' => '',
            'design_social' => '',
            'taboola_ads' => '',
            'tiktok_ads' => '',

        ]);

        DB::table('clients')->updateOrInsert([
            'id' => Str::uuid(),
            'name' => 'Giro Japa Araraquara',
            'username' => 'Giro Japa',
            'natural_person' => false,
            'legal_person' => true,
            'cpf' => 0,
            'cnpj' => 00000000000,
            'photo' => '',
            'email' => 'girojapa@example.com',
            'description' => 'O melhor sushi de Araraquara',
            'copy' => 'Compre e receba hoje mesmo',
            'cel_number_one' => 16997792512,
            'cel_number_two' => 0,
            'business_nihces' => 'Restaurante Japones',
            // links importantes
            'site' => 'girojapa.com',
            'google_analytics' => '',
            'gtm' => '',
            // redes sociais
            'instagram' => 'girojapa.com',
            'facebook' => 'girojapa.com',
            'youtube' => 'girojapa.com',
            'linkedin' => 'girojapa.com',
            'twitter' => 'girojapa.com',
            'tiktok' => 'girojapa.com',
            // serviços
            'facebook_ads' => '',
            'google_ads' => '',
            'mentoria_ecommerce' => '',
            'design_social' => '',
            'taboola_ads' => '',
            'tiktok_ads' => '',

        ]);

        DB::table('clients')->updateOrInsert([
            'id' => Str::uuid(),
            'name' => 'Barbearia Thallys Black Barber',
            'username' => 'GThallys Black Barber',
            'natural_person' => false,
            'legal_person' => true,
            'cpf' => 0,
            'cnpj' => 00000000000,
            'photo' => '',
            'email' => 'tblackbarber@example.com',
            'description' => 'A melhor barbearia de Araraquara',
            'copy' => 'Primeiro corte com 50% de desconto',
            'cel_number_one' => 16997792512,
            'cel_number_two' => 0,
            'business_nihces' => 'Barbearia',
            // links importantes
            'site' => 'profissaobarbeiroacademy.com',
            'google_analytics' => '',
            'gtm' => '',
            // redes sociais
            'instagram' => 'tblackbarber.com',
            'facebook' => 'tblackbarber.com',
            'youtube' => 'tblackbarber.com',
            'linkedin' => 'tblackbarber.com',
            'twitter' => 'tblackbarber.com',
            'tiktok' => 'tblackbarber.com',
            // serviços
            'facebook_ads' => '',
            'google_ads' => '',
            'mentoria_ecommerce' => '',
            'design_social' => '',
            'taboola_ads' => '',
            'tiktok_ads' => '',

        ]);
    }
 
    public function down()
    {
        //
    }
};
