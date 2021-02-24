@extends('layouts.app')
{{-- old home source codes --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} {{ 'old home uses the app.blade.php template' }}
                    {{-- {{ Auth::user()->name }} prints the logged user --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
