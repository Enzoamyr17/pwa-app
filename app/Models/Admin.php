<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'fname',
        'lname',
        'password',
        'timestamp',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'timestamp' => 'date',
    ];

    // Optional: accessor for full name
    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }
}
