<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $table = "data_registrasi_admin";

    protected $fillable = ['name', 'email', 'password'];
}

