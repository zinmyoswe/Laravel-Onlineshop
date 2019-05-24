@extends('admin.layout.admin')
@section('content')
<style type="text/css">
   
</style>
    Category Page
	@if(!empty($categories))
		@forelse($categories as $category)
		<li>
			<a href="#">{{$category->name}}</a>
		</li>
		@empty
			<li>No data</li>
		@endforelse
	@endif

	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Category
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
		<form method="post" action="{{ action('CategoryController@store')}}">
		@csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	
			<div class="form-group">
				<label>CategoryName :</label>
				<input type="text" name="name" placeholder="Name" class="form-control">
			</div>

			<input type="hidden" name="subcat" placeholder="Name" class="form-control" value="0">

		
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-primary">Save</button>
      </div>
    </div>
	</form>
  </div>
</div>
@endsection