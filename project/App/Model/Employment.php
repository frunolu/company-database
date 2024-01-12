<?php

namespace Model;

use App\Models\Company;
use App\Models\Person;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $table = 'Employment';
    protected $primaryKey = 'employment_id';
    public $timestamps = false;
    protected $fillable = ['person_id', 'company_id'];

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id', 'person_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

}

