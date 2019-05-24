@extends('admin.layout.admin')
@section('content')
<style type="text/css">
   
</style>
	<h3>Product/Create</h3>
	<div class="row">
		
		<div class="col-md-6 offset-2">
			@if(session('success'))
		<div class="alert alert-success">
			<strong>{{session('success')}}</strong>
		</div>
		@endif
				<form action="{{ action('ProductController@store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" placeholder="Name" class="form-control">
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea name="description" placeholder="..." class="form-control"></textarea>
			</div>
			
			<div class="form-group">
				<label>Size</label>
			<select class="form-control" name="size">
			  <option>Select Size...</option>
			  <option>XS</option>
			  <option>S</option>
			  <option>M</option>
			  <option>L</option>
			  <option>XL</option>
			  <option>2XL</option>
			  <option>3XL</option>
			</select>
			</div>

				<div class="form-group">
				<label>Category</label>
			<select class="form-control" name="category_id">
			  <option>Select Category...</option>
			  @foreach($categories as $category)
			  <option value="{{$category->id}}">{{$category->name}}</option>
			 @endforeach
			</select>
			</div>
			
			<label>Image</label>
			<div class="form-group">

			<input type="file" name="file">
			</div>

			<div class="form-group">
				<label>Price :</label>
				<input type="text" name="price" placeholder="Price" class="form-control">
			</div>

			<div class="form-group">
				<label>Qty :</label>
				<input type="number" name="qty" placeholder="qty" class="form-control">
			</div>

	
			<button class="btn btn-outline-primary" type="submit">Save</button>
		</form>
		</div>
	</div>
@endsection