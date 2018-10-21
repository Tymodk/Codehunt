@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your first few links, happy hunting!</div>
                @auth
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <div class="huntlink"><a href="{{ url('/huntstart/startlink1') }}">First link</a></div>
                   <div class="huntlink"><a href="{{ url('/huntstart/startlink2') }}">Second link</a></div>
                   <div class="huntlink"><a href="{{ url('/huntstart/startlink3') }}">Third link</a></div>
                   <div class="huntlink"><a href="{{ url('/huntstart/startlink4') }}">Fourth link</a></div>
                   <div class="huntlink"><a href="{{ url('/huntstart/startlink5') }}">Fifth link</a></div>
                   <div class="huntlink"><a href="{{ url('/huntstart/startlink6') }}">Sixth link</a></div>

                </div>
                @else
                Please <a href="{{ url('/login') }}">log in</a> or <a href="{{ url('/register') }}">register</a>
                @endauth

            </div>
        </div>
    </div>
</div>
@endsection
