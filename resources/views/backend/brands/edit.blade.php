@extends('backend/backendtemplate')
@section('backend')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brands Edit Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('brands.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				

				<div class="form-group row">
					<label for="name" class=" col-form-label">Name:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="name" name="name" value="{{$brand->name}}">
						 @error('name')
                                 <div class="alert alert-danger">Please input name</div>
                              @enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="photo" class=" col-form-label">Photo:</label>
					<div class="col-sm-5">
						<input type="file" class="form-control-file" id="photo" name="photo" value="{{$brand->photo}}">
						<img src="{{asset($brand->photo)}}">
						<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
						 @error('photo')
                                 <div class="alert alert-danger">Please input photo</div>
                              @enderror
					</div>
				</div>
				<br>
				<input type="submit" name="create" value="Update" class="btn btn-success">
			</form>
		</div>
	</div>
</div>
@endsection