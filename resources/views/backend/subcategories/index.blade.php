@extends('backend/backendtemplate')
@section('backend')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mx-1 mb-0 text-gray-800">Subcategories List</h1>
			<a href="{{route('subcategories.create')}}" class="btn btn-success">Add New</a>		
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead class="table-dark">
				<tr>
					<th>No</th>
					<th>Subcategory Name</th>
					<th>Category Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php  $i=1; @endphp
				@foreach($subcategories as $subcategory)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$subcategory->name}}</td>
					<td>{{$subcategory->category->name}}</td>
					<td>
						<a href="" class="btn btn-success">Detail</a>
						<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>
						<a href="" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection