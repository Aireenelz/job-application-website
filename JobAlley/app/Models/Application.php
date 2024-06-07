<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'application';
    protected $fillable = [
        'user_id',
        'job_id',
        'name',
        'email',
        'contact',
        'resume',
        'cover_letter',
        'status',
    ];
}
