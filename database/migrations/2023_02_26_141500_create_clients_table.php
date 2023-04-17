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

        if(!Schema::hasTable('clients', true)){
            Schema::create('clients', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('name')->nullable();
                $table->string('username', 64)->nullable();
                $table->boolean('natural_person');
                $table->boolean('legal_person');
                $table->bigInteger('cpf');
                $table->bigInteger('cnpj');
                $table->string('photo')->nullable();
                $table->string('email')->unique();
                $table->string('description')->nullable();
                $table->string('copy')->nullable;
                $table->bigInteger('cel_number_one')->nullable();
                $table->bigInteger('cel_number_two');
                $table->string('business_nihces')->nullable();
                // links importantes
                $table->string('site');
                $table->string('google_analytics');
                $table->string('gtm');
                // redes sociais
                $table->string('instagram')->nullable();
                $table->string('facebook')->nullable();
                $table->string('youtube');
                $table->string('linkedin');
                $table->string('twitter');
                $table->string('tiktok');
                // serviços
                $table->string('facebook_ads');
                $table->string('google_ads');
                $table->string('mentoria_ecommerce');
                $table->string('design_social');
                $table->string('taboola_ads');
                $table->string('tiktok_ads');
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
        Schema::dropIfExists('clients');
    }
};
