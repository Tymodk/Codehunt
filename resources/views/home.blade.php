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
                    <p>YOU CAN START HUNTING</p>
                    <p>Whenever you find any of your codes they will be listed here!</p>
                    @if($codetable['found1'])
                        <p>Code 1: {{$codetable['code1']}}</p>
                    @endif
                    @if($codetable['found1'])
                    <p>Oh wow! You've found the first code! This means you get to go to the next stage!</p>
                    <a href="{{ url('/hunt2')}}">The second round!</a>
                    @else
                    <a href="{{ url('/huntstart') }}">Click here to start your hunt!</a>
                    @endif
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
