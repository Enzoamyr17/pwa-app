<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TriviaQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'choice_a',
        'choice_b',
        'choice_c',
        'choice_d',
        'correct_answer',
        'category'
    ];
}
