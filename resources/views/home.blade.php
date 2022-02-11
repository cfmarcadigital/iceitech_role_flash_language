@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="col-md-8 offset-2">
        @include('flash')
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sample Message Flash') }}</div>

                <div class="card-body text-center">
                    <a href="{{ route('success') }}" class="btn btn-sm btn-success">Success</a>
                    <a href="{{ route('error') }}" class="btn btn-sm btn-danger">Error</a>
                    <a href="{{ route('info') }}" class="btn btn-sm btn-info">Info</a>
                    <a href="{{ route('warning') }}" class="btn btn-sm btn-warning">Warning</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
