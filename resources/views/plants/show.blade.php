@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white rounded-xl shadow-lg p-8 mt-8">
    <h1 class="text-2xl font-bold mb-6 text-green-700">Plant Details</h1>
    <div class="mb-6">
        <div class="mb-2"><span class="font-semibold text-green-800">Name:</span> {{ $plant->name }}</div>
        <div class="mb-2"><span class="font-semibold text-green-800">Species:</span> {{ $plant->species }}</div>
        <div class="mb-2"><span class="font-semibold text-green-800">Description:</span> {{ $plant->description }}</div>
    </div>
    <div class="flex gap-4">
        <a href="{{ route('plants.edit', $plant) }}" class="bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-600 transition">Edit</a>
        <a href="{{ route('plants.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded shadow hover:bg-gray-300 transition">Back to list</a>
    </div>
</div>
@endsection
