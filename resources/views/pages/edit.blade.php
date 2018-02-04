@extends('layout.app')



@section('content')
<br><br><br><br><br>
	<div class="container">
		<h4>Edit Product</h4>

		<!--Messages-->
        @include('layout.inc.messages')
		
	<form action="{{ action('ProductController@update', ['id' => $product->id]) }}" method="post">
		

		<div class="form-group">
			<label for="product">Product Name</label>
			<input type="text" name="product" class="form-control" placeholder="Product Name" id="product" value="{{ $product->product_name }}">
		</div>
		
		<div class="form-group">
			<label for="description">Product Description</label>
			<textarea name="description" class="form-control" rows="6" placeholder="Product Description" id="description">{{ $product->description }}</textarea>
		</div>
		
		<div class="form-group">
			<label for="category">Category</label>
			<select class="selectpicker form-control" name="category" id="category" value="{{ $product->category }}">
				<option value="{{ $product->category }}">Change for the Category Here</option>
			    <option value="men">Men</option>
			    <option value="women">Women</option>
			    <option value="decor">Home Decor</option>
			</select>
		</div>

		<input type="submit" name="submit" class="btn btn-primary pull-right" value="Update">
	<br>
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field() }}
	
	</form>
	<br><br>
	</div>

@endsection




@section('scripts')

	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

	<script>
		CKEDITOR.replace('description');
	</script>

@endsection