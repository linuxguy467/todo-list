@extends('layout')

@section('content')
    <div class="row mt-10">
        @forelse($tasks as $task)
            <div class="shadow-lg col-sm-5 p-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Title: {{ $task->title }}
                    </div>
                    <div class="card-body">
                        @if ($task->status === 1)
                            <h5 class="card-title">
                                Task status: Completed
                            </h5>
                        @else
                            <h5 class="card-title">
                                Task status: Incomplete
                            </h5>
                        @endif
                        <p class="card-text">
                            Task Description: {{ $task->description }}
                        </p>
                        <a href="#" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        @empty
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
                                    <p>Click Create Task to create your first task!!!</p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
@endsection
