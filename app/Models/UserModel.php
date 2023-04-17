<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class UserModel extends Authenticatable
{
	use SoftDeletes;

	protected $table = 'users';

	protected $keyType = 'string';

	protected $primaryKey = 'id';

	protected $fillable = [
		'id',
		'firstName',
		'secondName',
		'username',
		'bornDate',
		'email',
		'photo',
		'cover',
		'bio',
		'cep',
		'address',
		'numAddress',
		'city',
		'neighbourhood',
		'state',
		'country',
		'complement',
		'keyPix',
		'namePix',
		'whatsapp',
		'linkedin',
		'facebook',
		'instagram',
		'twitter',
		'youtube',
		'password',
		'user_profile_id',
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

	function userProfile()
	{
		return $this->hasOne('\App\Models\UserProfileModel', 'id', 'user_profile_id');
	}
}
