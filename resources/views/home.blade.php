@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @auth
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($codetable['user_id'] === null)
                    <a href="{{ url('/generatecodes') }}"><button type="button" class="btn btn-primary">Generate your codes!</button></a>
                    @else
                    YOU CAN START HUNTING
                    @endif
                </div>
                @else
                Please <a href="{{ url('/login') }}">log in</a> or <a href="{{ url('/register') }}">register</a>
                @endauth

            </div>
        </div>
    </div>
</div>
@endsection
