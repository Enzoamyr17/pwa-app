<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Request extends Model
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
        'updated_by',
    ];

    protected $dates = ['requested_at'];

    /**
     * Relationship to the admin who updated the request.
     */
    public function updatedBy()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }
}
