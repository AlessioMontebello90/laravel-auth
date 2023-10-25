@extends('layouts.app')

@section('content')
    <section class="container mt-5">
        <h1>{{ $title }}</h1>
    </section>
    <div class="container my-5 text-center">
        <a class="navbar-brand btn btn-warning " href="{{ route('admin.projects.index') }}">My Portfolio</a>
    </div>
@endsection
