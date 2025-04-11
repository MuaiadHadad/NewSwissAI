<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationExpertise extends Model
{
    protected $fillable = ['application_id', 'value'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
