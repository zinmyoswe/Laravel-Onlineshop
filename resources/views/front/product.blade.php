@extends('layout.main')

@section('content')
@include('layout.nav')

<style type="text/css">
	.card{
		margin-bottom: 4px;
	}
	h5 a{
		color :#000;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			 sidebar
		</div>{{--  col-md-3 end --}}


		<div class="col-md-9">
				Product
			<div class="row">
			
			@forelse($products as $product)
				<div class="col-lg-3 col-sm-6 col-xs-6">
								<div class="card" style="width: 13rem;">
  <img src="https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive,fl_lossy/ea282d3aa1e141139df4a845016c71b9_9366/blackbird-solid-tee.jpg" class="card-img-top" alt="..."  height="280px">
  <div class="card-body">
    <h5 class="card-title"><a href="{{route('detail')}}">{{$product->name}}</a></h5>
    <p>$ {{$product->price}}</p>
    <p class="card-text"></p>
    <p style="font-size: 12px; color: grey">3 colors</p>
    
  </div>
 {{--  {{Storage::url($product->image)}} --}}
</div>
				</div> {{-- col-lg-3 end --}}

				@empty
				<h3>No Product Found</h3>
				@endforelse
					
			</div>
			

		</div>{{--  col-md-9 end --}}
	</div>
</div>
@endsection