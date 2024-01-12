<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'Course';
    protected $primaryKey = 'course_id';
    public $timestamps = false;
    protected $fillable = ['name', 'author_id', 'active'];

    public function author()
    {
        return $this->belongsTo(Person::class, 'author_id', 'person_id');
    }
}

