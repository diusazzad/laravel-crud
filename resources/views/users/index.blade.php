@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">Users</h1>

    <div class="mb-4">
        <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Add
            User</a>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="border px-4 py-2">{{ $user->name }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('users.show', $user) }}" class="text-blue-500 hover:underline">View</a>
                    |
                    <form method="POST" action="{{ route('users.destroy', $user) }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
