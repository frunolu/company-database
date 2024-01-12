<?php

// app/Models/Company.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'Company';
    protected $primaryKey = 'company_id';
    public $timestamps = false;
    protected $fillable = ['name'];

}



