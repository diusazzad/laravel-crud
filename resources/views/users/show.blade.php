@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">User Details</h1>

    <div class="mb-4">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    </div>

    <a href="{{ route('users.index') }}" class="text-blue-500 hover:underline">Back to Users</a>
</div>
@endsection
