<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActivitiesController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInfo::first();

        return view('layouts.footer', compact('contactInfo'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'address' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'logo1' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'logo2' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'logo3' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'logo4' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $logos = [];

        foreach (['logo1', 'logo2', 'logo3', 'logo4'] as $logo) {
            if ($request->hasFile($logo)) {
                $logos[$logo] = $request->file($logo)->store('logos', 'public');
            }
        }

        ContactInfo::create([
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'logo1' => $logos['logo1'] ?? null,
            'logo2' => $logos['logo2'] ?? null,
            'logo3' => $logos['logo3'] ?? null,
            'logo4' => $logos['logo4'] ?? null,
        ]);

        return redirect()->route('pdrrmo-home.index')->with('success', 'Contact information updated successfully!');
    }

    public function edit($id)
    {
        $contactInfo = ContactInfo::find($id);

        if (! $contactInfo) {
            return redirect()->route('contact-info.index')->with('error', 'Contact information not found.');
        }

        return view('contact.edit', compact('contactInfo'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'logo1' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'logo2' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'logo3' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'logo4' => 'nullable|image|mimes:jpg,png,jpeg,gif',
        ]);

        $contactInfo = ContactInfo::find($id);

        $contactInfo->address = $validated['address'];
        $contactInfo->email = $validated['email'];
        $contactInfo->phone = $validated['phone'];

        foreach (['logo1', 'logo2', 'logo3', 'logo4'] as $logo) {
            if ($request->hasFile($logo)) {
                if ($contactInfo->$logo) {
                    Storage::disk('public')->delete($contactInfo->$logo);
                }

                $contactInfo->$logo = $request->file($logo)->store('logos', 'public');
            }
        }

        $contactInfo->save();

        return redirect()->route('pdrrmo-home.index')->with('success', 'Contact information updated successfully!');
    }
}
