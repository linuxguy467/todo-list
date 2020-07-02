@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section class="section">
                        <p>Click View Tasks to view your current tasks and get started!!!</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
