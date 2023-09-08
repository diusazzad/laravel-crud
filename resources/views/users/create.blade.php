@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">Add User</h1>

    <form action="{{ route('users.store') }}" method="POST" class="w-full max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" class="form-input" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" name="email" id="email" class="form-input" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
            <input type="password" name="password" id="password" class="form-input" required>
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Add User</button>
        </div>
    </form>
</div>
@endsection
