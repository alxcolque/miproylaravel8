@extends('layouts.app')

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

                    {{ __('You are ADMIN!') }}
                    <a href="{{ route('pdfmaker') }}" class="btn btn-primary btn-sm">Generar pdf</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
