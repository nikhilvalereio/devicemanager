<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'alternative', 'email', 'address', 'designations', 'image', 'created_at', 'updated_at'
    ];


}
