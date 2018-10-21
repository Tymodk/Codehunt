@extends('layouts.app')

@section('content')
	<div class="gifpage">

		 <img class="orangegif" src="{{ asset('images/orange.gif')}}" alt="an orange">

		<a class="gifpagelink" href="{{url('/code1/') . '/' . $codetable['code1']}}">Here!</a>
	</div>
@endsection