<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Jobs;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function job()
    {
        return $this->belongsTo(Jobs::class);
    }

}
