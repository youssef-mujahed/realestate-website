@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Edit Property</h1>

        <form action="{{ route('admin.properties.update', $property) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror"
                    id="title" type="text" name="title" value="{{ old('title', $property->title) }}" required>
                @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                    id="description" name="description" rows="4" required>{{ old('description', $property->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                    Price
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') border-red-500 @enderror"
                    id="price" type="number" name="price" value="{{ old('price', $property->price) }}" required>
                @error('price')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                    City
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('city') border-red-500 @enderror"
                    id="city" type="text" name="city" value="{{ old('city', $property->city) }}" required>
                @error('city')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="neighborhood">
                    Neighborhood
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('neighborhood') border-red-500 @enderror"
                    id="neighborhood" type="text" name="neighborhood" value="{{ old('neighborhood', $property->neighborhood) }}">
                @error('neighborhood')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bedrooms">
                    Bedrooms
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('bedrooms') border-red-500 @enderror"
                    id="bedrooms" type="number" name="bedrooms" value="{{ old('bedrooms', $property->bedrooms) }}" required>
                @error('bedrooms')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bathrooms">
                    Bathrooms
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('bathrooms') border-red-500 @enderror"
                    id="bathrooms" type="number" name="bathrooms" value="{{ old('bathrooms', $property->bathrooms) }}" required>
                @error('bathrooms')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="area">
                    Area (sq ft)
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('area') border-red-500 @enderror"
                    id="area" type="number" name="area" value="{{ old('area', $property->area) }}" required>
                @error('area')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
                    Type
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('type') border-red-500 @enderror"
                    id="type" name="type" required>
                    <option value="">Select Type</option>
                    <option value="house" {{ old('type', $property->type) == 'house' ? 'selected' : '' }}>House</option>
                    <option value="apartment" {{ old('type', $property->type) == 'apartment' ? 'selected' : '' }}>Apartment</option>
                    <option value="condo" {{ old('type', $property->type) == 'condo' ? 'selected' : '' }}>Condo</option>
                    <option value="townhouse" {{ old('type', $property->type) == 'townhouse' ? 'selected' : '' }}>Townhouse</option>
                </select>
                @error('type')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                    Status
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('status') border-red-500 @enderror"
                    id="status" name="status" required>
                    <option value="">Select Status</option>
                    <option value="for_sale" {{ old('status', $property->status) == 'for_sale' ? 'selected' : '' }}>For Sale</option>
                    <option value="for_rent" {{ old('status', $property->status) == 'for_rent' ? 'selected' : '' }}>For Rent</option>
                    <option value="sold" {{ old('status', $property->status) == 'sold' ? 'selected' : '' }}>Sold</option>
                    <option value="rented" {{ old('status', $property->status) == 'rented' ? 'selected' : '' }}>Rented</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    <input type="checkbox" name="furnished" value="1" {{ old('furnished', $property->furnished) ? 'checked' : '' }}>
                    Furnished
                </label>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="year_built">
                    Year Built
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('year_built') border-red-500 @enderror"
                    id="year_built" type="number" name="year_built" value="{{ old('year_built', $property->year_built) }}">
                @error('year_built')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="amenities">
                    Amenities (comma-separated)
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('amenities') border-red-500 @enderror"
                    id="amenities" type="text" name="amenities" value="{{ old('amenities', $property->amenities) }}">
                @error('amenities')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Image URL
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror"
                    id="image" type="text" name="image" value="{{ old('image', $property->image) }}">
                @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="broker_name">
                    Broker Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('broker_name') border-red-500 @enderror"
                    id="broker_name" type="text" name="broker_name" value="{{ old('broker_name', $property->broker_name) }}">
                @error('broker_name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="broker_phone">
                    Broker Phone
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('broker_phone') border-red-500 @enderror"
                    id="broker_phone" type="text" name="broker_phone" value="{{ old('broker_phone', $property->broker_phone) }}">
                @error('broker_phone')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="broker_email">
                    Broker Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('broker_email') border-red-500 @enderror"
                    id="broker_email" type="email" name="broker_email" value="{{ old('broker_email', $property->broker_email) }}">
                @error('broker_email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Update Property
                </button>
                <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection 