@extends('layouts.app')

@section('content')
<div class="bg-white rounded-xl shadow-lg p-6">
    <h1 class="text-3xl font-bold mb-6 text-green-800">Plants</h1>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4 border border-green-200">{{ session('success') }}</div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border rounded-lg shadow-sm">
            <thead class="bg-green-100">
                <tr>
                    <th class="py-3 px-4 text-left font-semibold text-green-700">Name</th>
                    <th class="py-3 px-4 text-left font-semibold text-green-700">Species</th>
                    <th class="py-3 px-4 text-left font-semibold text-green-700">Description</th>
                    <th class="py-3 px-4 text-left font-semibold text-green-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plants as $plant)
                <tr class="hover:bg-green-50 transition">
                    <td class="py-2 px-4 border-b">{{ $plant->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $plant->species }}</td>
                    <td class="py-2 px-4 border-b">{{ $plant->description }}</td>
                    <td class="py-2 px-4 border-b space-x-2">
                        <a href="{{ route('plants.show', $plant) }}" class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition">View</a>
                        <a href="{{ route('plants.edit', $plant) }}" class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 rounded hover:bg-yellow-200 transition">Edit</a>
                        <form action="{{ route('plants.destroy', $plant) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 transition" onclick="return confirm('Delete this plant?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
