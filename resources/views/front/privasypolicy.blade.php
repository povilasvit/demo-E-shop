@extends('layouts/front')

@section('content')

	<div class="shopCateoryContainer"  id="container">
		@foreach($others as $other)
			@if($other->name == 'Privacy Policy')
				<div class="other">{!!$other->content!!}</div>
			@endif
		@endforeach
	</div> <!-- shopCateoryContainer -->

@endsection

@section('pageScript')


	

@endsection