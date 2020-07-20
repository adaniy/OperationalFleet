@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Je Lloguar') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 style="display: inline;">Deshironi te vazhdoni</h5>
                    <a class="btn btn-primary" href="/karburanti" style="float:right;">Vazhdo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
