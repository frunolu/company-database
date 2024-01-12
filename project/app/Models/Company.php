<?php
declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'Company';
    protected $primaryKey = 'company_id';
    public $timestamps = false;
    protected $fillable = ['name'];

}



