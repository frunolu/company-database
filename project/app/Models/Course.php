<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Course extends Model
{
    protected $table = 'Course';
    protected $primaryKey = 'course_id';
    public $timestamps = false;
    protected $fillable = ['name', 'author_id', 'active'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'author_id', 'person_id');
    }
}

