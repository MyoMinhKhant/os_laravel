@extends('backend/backendtemplate')
@section('backend')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Categories Create Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				
				<div class="form-group row">
					<label for="name" class=" col-form-label">Name:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="name" name="name">
						 @error('name')
                                 <div class="alert alert-danger">Please input name</div>
                              @enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="photo" class=" col-form-label">Photo:</label>
					<div class="col-sm-5">
						<input type="file" class="form-control-file" id="photo" name="photo">
						 @error('name')
                                 <div class="alert alert-danger">Please input photo</div>
                              @enderror
					</div>
				</div>
				<br>
				<input type="submit" name="create" value="Create" class="btn btn-success">
			</form>
		</div>
	</div>
</div>
@endsection