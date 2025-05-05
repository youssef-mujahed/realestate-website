<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function dashboard()
    {
        $properties = Property::latest()->paginate(10);
        return view('admin.dashboard', compact('properties'));
    }

    public function create()
    {
        return view('admin.properties.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'city' => 'required|string',
            'neighborhood' => 'nullable|string',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'area' => 'required|numeric',
            'type' => 'required|string',
            'status' => 'required|string',
            'furnished' => 'boolean',
            'year_built' => 'nullable|integer',
            'amenities' => 'nullable|string',
            'image' => 'nullable|string',
            'broker_name' => 'nullable|string',
            'broker_phone' => 'nullable|string',
            'broker_email' => 'nullable|email',
        ]);

        Property::create($validated);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Property created successfully.');
    }

    public function edit(Property $property)
    {
        return view('admin.properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'city' => 'required|string',
            'neighborhood' => 'nullable|string',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'area' => 'required|numeric',
            'type' => 'required|string',
            'status' => 'required|string',
            'furnished' => 'boolean',
            'year_built' => 'nullable|integer',
            'amenities' => 'nullable|string',
            'image' => 'nullable|string',
            'broker_name' => 'nullable|string',
            'broker_phone' => 'nullable|string',
            'broker_email' => 'nullable|email',
        ]);

        $property->update($validated);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('admin.dashboard')
            ->with('success', 'Property deleted successfully.');
    }
} 