<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'first_name', 'email', 'linkedin', 'github', 'portfolio', 'website',
        'country', 'timezone', 'english_level', 'highest_degree',
        'ai_ml_certifications', 'other_certifications', 'cert_upload',
        'cv', 'cv_link', 'available_hours', 'hourly_rate', 'employment_status',
        'preferred_hours', 'years_dev', 'years_ai', 'ai_company', 'experience_level', 'nda',
    ];

    public function expertise()
    {
        return $this->hasMany(ApplicationExpertise::class);
    }

    public function technologies()
    {
        return $this->hasMany(ApplicationTechnology::class);
    }

    public function experience()
    {
        return $this->hasMany(ApplicationExperience::class);
    }
}
