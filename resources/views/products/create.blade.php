@extends('layout')

@section('content')
<div class="col-sm-8">
	<h1>vista create</h1>
	<h2>
	nuevo producto
	<a href=" {{route('products.index')}} " class="btn btn-primary pull-right" >listado</a>
	</h2>
	@include('products.fragment.error')
	{!! Form::open(['route'=>'products.store']) !!}
    @include('products.fragment.form')
{!! Form::close() !!}
</div>
<div class="col-sm-4">
@include('products.fragment.aside')
</div>


@endsection