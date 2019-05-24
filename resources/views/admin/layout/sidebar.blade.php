<ul>
	{{Auth::user()->name}}
	
	<li><a href="{{ action('ProductController@create')}}">Create Product</a></li>
	<li><a href="{{ action('ProductController@index')}}">Product</a></li>
	<li><a href="{{route('admin.index')}}">Home</a></li>
	<li><a href="{{route('categoryCreate')}}">Manage Category</a></li>
	<li><a href="{{route('logout')}}">Logout</a></li>
</ul>