<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // Enable Mass Assignment
    protected $fillable = ['name', 'first_name', 'last_name', 'email', 'address'];
}
