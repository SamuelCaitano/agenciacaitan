<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoggedModel extends Model
{
    use HasFactory;

    protected $table = 'logged';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'email',
        'photo',
        'local',
        'created_at',
        'updated_at'
    ];
}
