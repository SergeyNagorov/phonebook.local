@extends('layouts.app')

@section('content')
<h3>Contact List</h3>

<table>
    <tr>
        <td>Name</td>
        <td>Phone</td>
        <td colspan="3">
            Actions
            <a href="{{ route('contacts.create') }}">
                <input type="button" value="Create contact">
            </a>
        </td>
    </tr>
    @forelse($contacts as $contact)
    <tr>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->phone }}</td>
        <td>
            <a href="{{ route('contacts.show', $contact) }}">
                <input type="button" value="Test show">
            </a>
        </td>
        <td>
            <a href="{{ route('test.show', $contact) }}">
                <input type="button" value="Show">
            </a>
        </td>
        <td>
            <a href="{{ route('contacts.edit', $contact) }}">
                <input type="button" value="Edit">
            </a>
        </td>
        <td>
            <form action="{{ route('contacts.destroy', $contact) }} " method="post">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5">
            No contacts
        </td>
    </tr>
    @endforelse
</table>

@endsection
