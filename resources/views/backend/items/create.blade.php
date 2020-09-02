@extends('backend/backendtemplate')
@section('backend')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
		<div class="col">
		<h1 class="h3 mb-0 text-gray-800">Items Create Form</h1>
	</div>
</div>
</div>
<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
	@csrf
		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Code No</label>
		<div class="col-sm-5">
			<input type="text" name="codeno" class="form-control" >
				{{-- <span class="text-danger">{{$errors->first('codeno')}}</span> --}}
		</div>
		</div>
		
	
		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-5">
			<input type="text" name="name" class="form-control" >
		</div>
		</div>
		

	<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-5">
			<input type="file" name="photo" class="form-upload-file" >
		</div>
		</div>
	

		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-5">
			<input type="number" name="price" class="form-control" >
		</div>
		</div>
	


		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Discount</label>
		<div class="col-sm-5">			
			<input type="number" name="discount" class="form-control" value="0">
		</div>
		</div>
	

		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-5">
			<textarea name="description"></textarea>
		</div>
		</div>
<br>
		<div class="form-group-row">
	      <div class="col-sm-5">
	      	<select class="form-control form-control-md" id="inputBrand" name="brand">
	      		<optgroup label="Choose Brand">
	      			@foreach($brands as $brand)
	      			<option value="{{$brand->id}}">{{$brand->name}}</option>
	      			@endforeach
	      		</optgroup>
	      	</select>
	      </div>
		</div>
		<br>
		<div class="form-group-row">
	      <div class="col-sm-5">
	      	<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
	      		<optgroup label="Choose Subcategory">
	      			@foreach($subcategories as $subcategory)
	      			<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
	      			@endforeach
	      		</optgroup>
	      	</select>
	      </div>
		</div><br>

		<div class="form-group">
			<input type="submit" name="btnsubmit" value="create" class="btn btn-success">
		</div>

	</form>
@endsection