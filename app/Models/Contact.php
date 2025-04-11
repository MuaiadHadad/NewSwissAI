<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'requirements',
        'cert_upload',
        'nda',
        'estado',
    ];
    public function Project()
    {
        return $this->belongsTo(Project::class);
    }
}
