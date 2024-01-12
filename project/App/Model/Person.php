<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'Person';
    protected $primaryKey = 'person_id';
    public $timestamps = false;
    protected $fillable = ['name', 'rights'];

}

