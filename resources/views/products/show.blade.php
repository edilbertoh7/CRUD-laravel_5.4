@extends('layout')

@section('content')
<div class="col-sm-8">
	<h1>vista show</h1>
	<h2>

	{{$product->name}}
	<a href=" {{route('products.edit',$product->id)}} " class="btn btn-default pull-right" >editar</a>
	</h2>
	<p> {{$product->short}} </p>
   {!! $product->body !!}
</div>
<div class="col-sm-4">
@include('products.fragment.aside')
</div>


@endsection