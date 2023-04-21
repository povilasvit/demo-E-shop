@extends('layouts/admin');

@section('name')

	Edit Product

@endsection

@section('content')


	<div class="col-md-9">
			<form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label for="category">Category</label>
				<select name="category_id" id="category_id" class="form-control col-md-6">
					@foreach($categories as $category)
						<option value="{{$category->id}}">
							{{$category->name}}
						</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="discount">Discount</label>
				<select name="discount_id" id="discount_id" class="form-control col-md-6">
					@foreach($discounts as $discount)
						<option value="{{$discount->id}}">
							{{$discount->name}}
						</option>
					@endforeach
				</select>
			</div>


			<div class="form-group">
				<label for="name">Product Name</label>
				<input type="text" name="name" id="name" class="form-control col-md-6" value="{{$product->name}}">
			</div>
			<div class="form-group">
				<label for="inStock">Product in Stock</label>
				<input type="text" name="inStock" id="inStock" class="form-control col-md-6" value="{{$product->inStock}}">
			</div>
			<div class="form-group">
				<label for="name">Product Price</label>
				<input type="text" name="price" id="price" class="form-control col-md-6" value="{{$product->price}}">
			</div>
			<div class="form-group">
				<label for="description">Product Description</label>
				<textarea name="description" class="form-control col-md-10" cols="5" rows="5">{{$product->description}}</textarea>
			</div>
			<div class="form-group">
				<input id="content" type="hidden" name="content" value="{{$product->content}}">
				<trix-editor input="content"></trix-editor>
			</div>
			<div class="form-group">
				<label for="file">1st Photo</label><br>
				<img class="img-thumbnail mb-3" style="height: 45vh;" src="/images/products/{{$product->path}}"><br>
				<input type="file" name="file">
			</div>
			<div class="form-group">
				<label for="file">2nd Photo</label><br>
				<img class="img-thumbnail mb-3" style="height: 45vh;" src="/images/products/{{$product->path2}}"><br>
				<input type="file" name="file2">
			</div>
			<div class="form-group">
				<label for="file">3rd Photo</label><br>
				<img class="img-thumbnail mb-3" style="height: 45vh;" src="/images/products/{{$product->path3}}"><br>
				<input type="file" name="file3">
			</div>
			<div class="form-group">
				<button type="submit" class="form-control col-md-6 btn btn-info">Update Product</button>
			</div>

		</form>				



	</div>

@endsection
@section('trixScript')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js" integrity="sha512-zEL66hBfEMpJUz7lHU3mGoOg12801oJbAfye4mqHxAbI0TTyTePOOb2GFBCsyrKI05UftK2yR5qqfSh+tDRr4Q==" crossorigin="anonymous"></script>
@endsection