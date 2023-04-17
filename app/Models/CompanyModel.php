<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    use HasFactory;

    protected $table = 'company';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'fantasy_name',
        'business_name',
        'cnpj',
        'logo',
        'favicon',
        'cover',
        'cover_login',
        'cover_share',
        'email',
        'description',
        'copy',
        'cel_number_one',
        'cel_number_two',
        'business_nihces',
        'cep',
        'address',
        'numAddress',
        'city',
        'neighbourhood',
        'state',
        'country',
        'complement',		 
        'canonical',
        'google_analytics',
        'gtm',
        'instagram',
        'facebook',
        'youtube',
        'telegram',
        'linkedin',
        'twitter',
        'tiktok',
        'behance', 
        'drive',
        'github',
        'dribbble',  
        'keyPix',
        'namePix', 
    ];
}
