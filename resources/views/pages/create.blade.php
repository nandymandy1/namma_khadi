@extends('layout.app')



@section('content')
<br><br><br><br><br>
	<div class="container">
		<h4>Add New Product</h4>

		<!--Messages-->
        @include('layout.inc.messages')
		
	<form action="{{ action('ProductController@store') }}" method="post" enctype="multipart/form-data">
		

		<div class="form-group">
			<label for="product">Product Name</label>
			<input type="text" name="product" class="form-control" placeholder="Product Name" id="product" value="{{ old('product') }}">
		</div>
		
		<div class="form-group">
			<label for="description">Product Description</label>
			<textarea name="description" class="form-control" rows="6" placeholder="Product Description" id="description">{{ old('description') }}</textarea>
		</div>
		
		<div class="form-group">
			<label for="category">Category</label>
			<select class="selectpicker form-control" name="category" id="category">
				<option value="men">Men</option>
			    <option value="women">Women</option>
			    <option value="decor">Home Decor</option>
			</select>
		</div>
		<p>Upload Atleast 3 Images</p>	
		<div class="form-group">
			<label for="">Upload Images</label>
			<input type="file" name="image_a" class="btn-info" data-icon="false"><br>
			<input type="file" name="image_b" class="btn-info" data-icon="false"><br>
			<input type="file" name="image_c" class="btn-info" data-icon="false"><br>
			<input type="file" name="image_d" class="btn-info" data-icon="false"><br>
		</div>

		<input type="submit" name="submit" class="btn btn-primary pull-right" value="Add">
	<br>
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
