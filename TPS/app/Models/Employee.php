<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'Employ_ID';

    public $timestamps = false;

    protected $fillable = [
        'Employ_ID',
        'Employ_Name' ,
        'Employ_Email',
        'Employ_Phone' ,
        'Gender',
        'DOB' ,
        'Address' ,
        'Name_TK' ,
        'Password',
    ];
}
