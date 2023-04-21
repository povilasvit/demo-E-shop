@extends('layouts/admin')

@section('name')

	Discounts Update

@endsection	

@section('content')
	<div class="container-fluid ml-sm-0 mr-sm-0">
		<div class="col-sm-12 col-md-4">
			<form action="{{route('discounts.update', $discount->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="_method" value="PUT">	
				<div class="form-group">
					<label for="name">Discount</label>
					<input type="text" name="name" id="name" class="form-control" value="{{$discount->name}}">
				</div>
				<div class="form-group 0">
					<label for="name">Discount's Value</label>
					<input type="text" name="value" id="name" class="form-control" value="{{$discount->value}}">
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-success form-control mt-sm-3">Update Discount</button>
				</div>
			</form>
		</div>
	</div>
@endsection