@extends('layouts.app')

@section('content')
<h3>Edit contact</h3>

<form action="{{ route('contacts.update', $contact) }}" method="post">
    @csrf
    @method('put')

    @include('contacts.partials.form')
</form>
@endsection
