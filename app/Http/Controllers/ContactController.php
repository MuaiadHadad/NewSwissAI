<?php

namespace App\Http\Controllers;

use App\Mail\ReplyToContact;
use App\Models\Contact;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $emails = Contact::orderBy('created_at', 'desc')->get();
        return view('Emails', compact('emails'));
    }
    public function submit(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'nullable|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:50',
                'requirements' => 'required|string',
                'cert_upload' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:5120',
            ]);

            $path = null;
            if ($request->hasFile('cert_upload')) {
                $path = $request->file('cert_upload')->store('uploads/Request', 'public');
            }

            $contact = new Contact;
            $contact->name = $validated['name'] ?? null;
            $contact->email = $validated['email'];
            $contact->phone = $validated['phone'];
            $contact->requirements = $validated['requirements'];
            $contact->cert_upload = $path;
            $contact->nda = $request->has('nda');
            $contact->save();

            return redirect()->back()->with('success', 'Your request has been submitted successfully.');

        } catch (\Exception $e) {
            Log::error('Contact form error: '.$e->getMessage());

            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function reply(Request $request, $id)
    {
        $request->validate([
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id);

        Mail::to($contact->email)->send(
            new ReplyToContact($request->subject, $request->message)
        );

        return back()->with('success', 'Resposta enviada com sucesso para ' . $contact->email);
    }
    public function destroy($id)
    {
        $email = Contact::findOrFail($id);
        $email->delete();

        return back()->with('success', 'Email removido com sucesso!');
    }
    public function markAsRead(Request $request)
    {
        $id = $request->input('id');

        $email = Contact::find($id);
        if ($email && !$email->estado) {
            $email->estado = true;
            $email->save();
        }

        return response()->json(['success' => true]);
    }
}
