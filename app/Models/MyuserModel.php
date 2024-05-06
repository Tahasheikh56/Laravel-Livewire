<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyuserModel extends Model
{
    use HasFactory;
    protected $table = 'myuser';
    protected $fillable = [
        "name",
        "email",
        "password",
        "image"
    ];
}

