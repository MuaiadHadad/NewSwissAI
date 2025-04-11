<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'company_name',
        'website',
        'industry',
        'location',
        'size',
        'contact_name',
        'contact_position',
        'contact_email',
        'contact_phone'
    ];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
