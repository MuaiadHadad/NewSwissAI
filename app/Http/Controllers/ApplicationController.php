<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $query = Application::query();
        logger()->info('Filtros ativos:', $request->all());
        // Filtros básicos
        if ($request->filled('country')) {
            $query->where('country', $request->country);
        }

        if ($request->filled('timezone')) {
            $query->where('timezone', $request->timezone);
        }

        if ($request->filled('english_level')) {
            $query->where('english_level', $request->english_level);
        }

        if ($request->filled('nda')) {
            $query->where('nda', $request->nda);
        }

        if ($request->filled('experience_level')) {
            $query->where('experience_level', $request->experience_level);
        }

        if ($request->filled('employment_status')) {
            $query->where('employment_status', $request->employment_status);
        }

        if ($request->filled('available_hours')) {
            $query->where('available_hours', 'like', '%' . $request->available_hours . '%');
        }

        if ($request->filled('hourly_rate')) {
            $query->where('hourly_rate', '<=', $request->hourly_rate);
        }

        if ($request->filled('highest_degree')) {
            $query->where('highest_degree', 'like', '%' . $request->highest_degree . '%');
        }

        if ($request->filled('ai_ml_certifications')) {
            $query->where('ai_ml_certifications', 'like', '%' . $request->ai_ml_certifications . '%');
        }

        if ($request->filled('other_certifications')) {
            $query->where('other_certifications', 'like', '%' . $request->other_certifications . '%');
        }

        if ($request->filled('years_dev')) {
            $query->where('years_dev', 'like', '%' . $request->years_dev . '%');
        }

        if ($request->filled('years_ai')) {
            $query->where('years_ai', 'like', '%' . $request->years_ai . '%');
        }

        // Filtros por relação - expertise (pivot table)
        if ($request->filled('expertise')) {
            $query->whereHas('expertise', function ($q) use ($request) {
                $q->whereIn('value', $request->expertise);
            });
        }

        // Filtros por relação - technologies (pivot table)
        if ($request->filled('tech')) {
            $query->whereHas('technologies', function ($q) use ($request) {
                $q->whereIn('value', $request->tech);
            });
        }

        // Resultados
        $applications = $query->latest()->paginate(10)->appends($request->except('page'));


        return view('CareersAdmin', compact('applications'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'timezone' => 'required',
            'cv' => 'nullable|file|mimes:pdf|max:5120',
            'cert_upload' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        $app = new Application;
        $app->fill($request->except(['expertise', 'tech', 'exp', 'cv', 'cert_upload']));
        $app->nda = $request->has('nda');

        if ($request->hasFile('cv')) {
            $app->cv = $request->file('cv')->store('uploads/cvs', 'public');
        }
        if ($request->hasFile('cert_upload')) {
            $app->cert_upload = $request->file('cert_upload')->store('uploads/certificates', 'public');
        }

        $app->save();

        foreach ($request->input('expertise', []) as $item) {
            $app->expertise()->create(['value' => $item]);
        }
        foreach ($request->input('tech', []) as $item) {
            $app->technologies()->create(['value' => $item]);
        }
        foreach ($request->input('exp', []) as $item) {
            $app->experience()->create(['value' => $item]);
        }

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
