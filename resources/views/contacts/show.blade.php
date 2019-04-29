@extends('layouts.app')

@section('content')
<h3>Contact</h3>

<table>
    <tr>
        <td>Name</td>
        <td>{{ $contact->name }}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{ $contact->phone }}</td>
    </tr>
    <tr>
        <td>Created</td>
        <td>{{ $contact->created_at }}</td>
    </tr>
    <tr>
        <td>Updated</td>
        <td>{{ $contact->updated_at }}</td>
    </tr>
</table>
<a href="{{ route('contacts.index') }}">
    <input type="button" value="Contact List">
</a>
@endsection
