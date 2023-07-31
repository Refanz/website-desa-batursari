@extends('layouts.dashboard')

@section('content')

<h1>ADMINN</h1>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Logout</button>
</form>

@endsection