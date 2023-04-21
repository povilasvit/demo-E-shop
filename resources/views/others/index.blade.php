@extends('layouts/admin')

@section('name')

	Other

@endsection	


@section('content')

<div class="col-md-6 p-2 bd-highlight">
	<ul class="list-group">	
		@foreach($others as $other)
			<li class="list-group-item d-flex bd-highlight">
				<div class="mr-auto p-2 bd-highlight">{{$other->name}}</div>
				<div class="p-2 bd-highlight ml-4">
					<a href="{{route('other.edit', $other->id)}}" type="button" class="btn btn-success btn-sm">Edit</a>
				</div>
				<div class="p-2 bd-highlight">
					<a href="{{-- {{route('singleProduct', $product->slug)}} --}}" type="button" class="btn btn-info btn-sm">View</a>
				</div>
			</li>		
		@endforeach
	</ul>
</div>
		
@endsection