<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('email');
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('website')->nullable();
            $table->string('country');
            $table->string('timezone');
            $table->string('english_level')->nullable();
            $table->boolean('nda')->default(false);
            $table->string('highest_degree')->nullable();
            $table->string('ai_ml_certifications')->nullable();
            $table->string('other_certifications')->nullable();
            $table->string('cert_upload')->nullable();
            $table->string('cv')->nullable();
            $table->string('cv_link')->nullable();
            $table->integer('available_hours')->nullable();
            $table->integer('hourly_rate')->nullable();
            $table->string('employment_status')->nullable();
            $table->integer('preferred_hours')->nullable();
            $table->string('years_dev')->nullable();
            $table->string('years_ai')->nullable();
            $table->string('ai_company')->nullable();
            $table->string('experience_level')->nullable();
            $table->timestamps();
        });
        // Pivot tables (repeat this for tech & experience)
        Schema::create('application_expertises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained()->onDelete('cascade');
            $table->string('value');
            $table->timestamps();
        });

        Schema::create('application_technologies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained()->onDelete('cascade');
            $table->string('value');
            $table->timestamps();
        });

        Schema::create('application_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained()->onDelete('cascade');
            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
