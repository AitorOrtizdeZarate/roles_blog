@extends('layouts.app')
@section('content')
	<h1>Añadir Post</h1>
	<form action="{{route('posts.store')}}" method="post">
	    @include('posts._form')
	</form>
@endsection

