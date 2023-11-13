<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'address'];

    // Several/Multiple Contacts belong to the same Company
    // ex. Multiple students belong to collage MCAST
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}