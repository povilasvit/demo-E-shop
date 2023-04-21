@extends('layouts/admin')

@section('name')

	Other Update

@endsection	

@section('content')

	<div class="container">
			<div class="">
			<form action="{{route('other.update', $other->id)}}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="PUT">	
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control" value="{{$other->name}}">
				</div>
				<div class="form-group">
					<input id="content" type="hidden" name="content" value="{{$other->content}}">
					<trix-editor input="content"></trix-editor>
				</div>		
				<div class="form-group">
					<button type="submit" class="btn btn-success form-control">Update</button>
				</div>
			</form>
			</div>
	</div>




@endsection
@section('trixScript')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js" integrity="sha512-zEL66hBfEMpJUz7lHU3mGoOg12801oJbAfye4mqHxAbI0TTyTePOOb2GFBCsyrKI05UftK2yR5qqfSh+tDRr4Q==" crossorigin="anonymous"></script>
@endsection