@extends('layout.main')

@section('content')
@include('layout.nav')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			Product Page
			<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{route('detail')}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
		</div>
	</div>
</div>
@endsection