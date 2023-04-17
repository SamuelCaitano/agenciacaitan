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
		if(!Schema::hasTable('users')) {
			Schema::create('users', function (Blueprint $table) {
				$table->uuid('id')->primary();
				$table->string('firstName');
				$table->string('secondName');
				$table->string('username', 64);
				$table->date('bornDate');
				$table->string('email')->unique();
				$table->string('photo');
				$table->string('office');
				$table->string('cover')->nullable();
				$table->string('bio', 200)->nullable();
				// endereco
				$table->bigInteger('cep');
				$table->string('address');
				$table->bigInteger('numAddress');
				$table->string('city');
				$table->string('neighbourhood');
				$table->string('state');
				$table->string('country');
				$table->string('complement')->nullable(); 
				// pagamento
				$table->string('keyPix');
				$table->string('namePix');
				// redes sociais
				$table->string('whatsapp')->nullable();
				$table->string('linkedin')->nullable();
				$table->string('facebook')->nullable();;
				$table->string('instagram')->nullable();
				$table->string('twitter')->nullable();
				$table->string('youtube')->nullable();
				
				$table->boolean('is_online')->nullable();
				$table->timestamp('email_verified_at')->nullable();
				$table->string('password');
				$table->foreignUuid('user_profile_id')->references('id')->on('user_profiles')->onUpdate('cascade')->onDelete('cascade');
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
		Schema::dropIfExists('users');
	}
};
