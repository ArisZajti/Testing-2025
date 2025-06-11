@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white rounded-xl shadow-lg p-8 mt-8">
    <h1 class="text-2xl font-bold mb-6 text-green-700">Edit Plant</h1>
    <form action="{{ route('plants.update', $plant) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-green-800 font-semibold mb-1">Name</label>
            <input type="text" name="name" class="border border-green-200 rounded w-full p-2 focus:ring-2 focus:ring-green-400" required value="{{ old('name', $plant->name) }}">
            @error('name')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-green-800 font-semibold mb-1">Species</label>
            <input type="text" name="species" class="border border-green-200 rounded w-full p-2 focus:ring-2 focus:ring-green-400" value="{{ old('species', $plant->species) }}">
            @error('species')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-green-800 font-semibold mb-1">Description</label>
            <textarea name="description" class="border border-green-200 rounded w-full p-2 focus:ring-2 focus:ring-green-400">{{ old('description', $plant->description) }}</textarea>
            @error('description')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="flex justify-between items-center">
            <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded shadow hover:bg-yellow-600 transition">Update</button>
            <a href="{{ route('plants.index') }}" class="text-gray-500 hover:underline">Cancel</a>
        </div>
    </form>
</div>
@endsection
