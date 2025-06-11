@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white rounded-xl shadow-lg p-8 mt-8">
    <h1 class="text-2xl font-bold mb-6 text-green-800">Add Plant</h1>
    <form action="{{ route('plants.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label class="block text-green-800 font-semibold mb-1">Name</label>
            <input type="text" name="name" class="border border-green-200 rounded w-full p-2 focus:ring-2 focus:ring-green-400" required value="{{ old('name') }}">
            @error('name')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-green-800 font-semibold mb-1">Species</label>
            <input type="text" name="species" class="border border-green-200 rounded w-full p-2 focus:ring-2 focus:ring-green-400" value="{{ old('species') }}">
            @error('species')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-green-800 font-semibold mb-1">Description</label>
            <textarea name="description" class="border border-green-200 rounded w-full p-2 focus:ring-2 focus:ring-green-400">{{ old('description') }}</textarea>
            @error('description')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="flex justify-between items-center">
            <button type="submit" class="bg-white text-green-700 border border-green-600 px-6 py-2 rounded shadow hover:bg-green-50 hover:text-green-800 transition font-bold">Add Plant</button>
            <a href="{{ route('plants.index') }}" class="text-green-700 hover:underline">Cancel</a>
        </div>
    </form>
</div>
@endsection
