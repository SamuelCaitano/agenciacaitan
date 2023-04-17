<?php

namespace App\Models;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ClientsModel extends Authenticatable
{
  use SoftDeletes;

  protected $table = 'clients';

  protected $keyType = 'string';

  protected $fillable = [ 
    'id',
    'name',
    'username',
    'natural_person',
    'legal_person',
    'cpf',
    'cnpj',
    'photo',
    'email',
    'description',
    'copy',
    'cel_number_one',
    'cel_number_two',
    'business_nihces',
    // links importantes
    'site',
    'google_analytics',
    'gtm',
    // redes sociais
    'instagram',
    'facebook',
    'youtube',
    'linkedin',
    'twitter',
    'tiktok',
    // serviços
    'facebook_ads',
    'google_ads',
    'mentoria_ecommerce',
    'design_social',
    'taboola_ads',
    'tiktok_ads',
    'create',
    'update',
    'read',
    'delete',
  ];

  /**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

  function setIdAttribute($val)
  {
    if (empty($val)) {
      $this->attributes['id'] = Str::uuid();
    }
  }

  function clients() { 
  } 
}
