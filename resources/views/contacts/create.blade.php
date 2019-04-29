@extends('layouts.app')

@section('content')
<h3>Create contact</h3>

<form action="{{ route('contacts.store') }}" method="post">
    @csrf

    @include('contacts.partials.form')
</form>
@endsection
