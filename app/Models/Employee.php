<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'EMP_ID';

    protected $fillable = [
        'Name',
        'Email',
        'Phone', 
        'Address',
    ];

    public $timestamps = false;
}
