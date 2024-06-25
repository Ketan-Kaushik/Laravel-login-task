<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apiUserData extends Model
{
    use HasFactory;

    protected $table = 'api_users_data';
    protected $fillable = [
        'name',
        'email',
        'password',
        'pincode',
        'address',
        'status'
    ];

    protected $hidden = [
        'password',
        'failed_at'
    ];
    public $timestamps = false;
}
