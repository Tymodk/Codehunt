@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">This page is the second hunt!</div>
                @auth
                @if($codetable['found1'])
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   

                </div>
                @else
                <p>Woah! You think you can cheat? go <a href="{{url('/')}}">back</a>!</p>
                @endif
                @else
                Please <a href="{{ url('/login') }}">log in</a> or <a href="{{ url('/register') }}">register</a>
                @endauth

            </div>
        </div>
    </div>
</div>
@endsection