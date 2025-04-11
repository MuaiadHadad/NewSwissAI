<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'private',
        'date_start',
        'date_end',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
