<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('company', true)){
            Schema::create('company', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('fantasy_name');
                $table->string('business_name', 64); 
                $table->string('cnpj');
                $table->string('logo');
                $table->string('favicon');
                $table->string('photo');
                $table->string('cover');
                $table->string('cover_login');
                $table->string('cover_share');
                $table->string('email')->unique();
                $table->string('description')->nullable();
                $table->string('copy')->nullable();
                $table->string('cel_number_one');
                $table->string('cel_number_two')->nullable();
                $table->string('business_nihces')->nullable();
                // endereco
				$table->string('cep');
				$table->string('address');
				$table->string('numAddress');
				$table->string('city');
				$table->string('neighbourhood');
				$table->string('state');
				$table->string('country');
				$table->string('complement')->nullable();				
                // links importantes
                $table->string('url')->nullable();
                $table->string('google_analytics')->nullable();
                $table->string('gtm')->nullable();
                // redes sociais
                $table->string('instagram')->nullable();
                $table->string('facebook')->nullable();
                $table->string('youtube')->nullable();
                $table->string('telegram')->nullable();
                $table->string('linkedin')->nullable();
                $table->string('twitter')->nullable();
                $table->string('tiktok')->nullable();
                $table->string('behance')->nullable(); 
                $table->string('drive')->nullable();
                $table->string('github')->nullable();
                $table->string('dribbble')->nullable();
                // pagamento
				$table->string('keyPix')->nullable();
				$table->string('namePix')->nullable(); 
                // default
                $table->rememberToken();
				$table->timestamps(); 
                $table->softDeletes();
            });
        }  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
};
