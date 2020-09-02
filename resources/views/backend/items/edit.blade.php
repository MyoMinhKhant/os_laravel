@extends('backend/backendtemplate')
@section('backend')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
		<div class="col">
		<h1 class="h3 mb-0 text-gray-800">Items Edit Form</h1>
	</div>
</div>
</div>
<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method('PUT')
		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Code No</label>
		<div class="col-sm-5">
			<input type="text" name="codeno" class="form-control" readonly="readonly" 
			value="{{$item->codeno}}" >
		{{-- 	<span class="text-danger">{{$errors->first('codeno')}}</span> --}}
		</div>
		</div>
		
	
		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-5">
			<input type="text" name="name" class="form-control" value="{{$item->name}}">
		{{-- 	<span class="text-danger">{{$errors->first('name')}}</span> --}}
		</div>
		</div>
		

	<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-5">
			<input type="file" name="photo" class="form-upload-file" value="">
<img src="{{asset($item->photo)}}" class="img-fluid w-25">
		
		<input type="hidden" name="oldphoto" value="{{$item->photo}}">
		</div>
		</div>
	

		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-5">
			<input type="number" name="price" class="form-control" 	value="{{$item->price}}">
		</div>
		</div>
	


		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Discount</label>
		<div class="col-sm-5">			
			<input type="number" name="discount" class="form-control" 	value="{{$item->codeno}}">
		</div>
		</div>
	

		<div class="form-group-row">
			<label class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-5">
			<textarea name="description" value="">{{$item->description}}</textarea>
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
			<input type="submit" name="btnsubmit" value="edit" class="btn btn-success">
		</div>

	</form>
@endsection