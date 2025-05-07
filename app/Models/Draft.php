<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Draft extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'partname',
        'partnum',
        'drawnum',
        'posnum',
        'matnum',
        'impa',
        'artnum',
        'specs',
        'timeper',
        'requested_at',
        'token',
    ];

    protected $dates = ['requested_at'];

}
