@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Meetings </h1>
                    <p>{{ $data['date'] }} {{ $data['title'] }}</p>
                    <p>{{ $data['body'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
