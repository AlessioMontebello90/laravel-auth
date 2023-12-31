@extends('layouts.app')

@section('content')
    <div class="container my-5 text-center">
        <a class="navbar-brand btn btn-primary" href="{{ route('admin.projects.index') }}">My Portfolio</a>
    </div>

    <div class="container">
        <h2 class="fs-5 text-secondary my-5">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
