<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'Training';
    protected $primaryKey = 'training_id';
    public $timestamps = false;
    protected $fillable = ['person_id', 'course_id', 'certificate', 'date_completed', 'company_id'];

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id', 'person_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

}
