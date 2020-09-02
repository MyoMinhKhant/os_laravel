@extends('backend/backendtemplate')
@section('backend')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategories Edit Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('subcategories.update',$subcategory->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')

				<div class="form-group row">
					<label for="name" class=" col-form-label">Name:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="name" name="name" value="{{$subcategory->name}}">
						 @error('name')
                                 <div class="alert alert-danger">Please input name</div>
                              @enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="category" class=" col-form-label">Category:</label>
					<div class="col-sm-5">
						<select class="form-control form-control-md" id="inputCategory" name="category">Categories
							<optgroup label="Choose category">
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</optgroup>
						</select>
					</div>
				</div>
				
				<br>
				<input type="submit" name="create" value="Update" class="btn btn-success">
			</form>
		</div>
	</div>
</div>
@endsection