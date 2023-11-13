<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // Enable Mass Assignment
    protected $fillable = ['name', 'address', 'website', 'email'];

    // A Company can have multiple contacts
    // ex. MCAST can have multiple students
    // One To Many Relationship
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}

