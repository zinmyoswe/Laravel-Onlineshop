@extends('admin.layout.admin')
@section('content')
	<h3>Product/Index</h3>
	<div class="row">
		<div class="col-md-6 offset-2">
		  <ul>
		  	@foreach($products as $product)
				<li>
					<h4>Name of Product:{{$product->name}}</h4>
				</li>
		  	@endforeach
		  </ul>
		</div>
	</div>
@endsection