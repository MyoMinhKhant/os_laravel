@extends('backend/backendtemplate')
@section('backend')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="col">
		<h1 class="h3 mb-0 text-gray-800">Items List</h1>
			<div class="float-right align-items-right justify-content-between mb-4">
		<a href="{{route('items.create')}}" class="btn btn-success">Add New</a>
	</div>
</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered ">
			<tr>
				<thead class="thead-dark">
					<th>No</th>
					<th>CodeNo</th>
					<th>Name</th>
					<th>Price</th>
					<th>Action</th>
					
				</thead>
				</tr>
				<tbody>
					@php $i=1;
					@endphp
                    @foreach($items as $item)
					<tr>
					<td>{{$i++}}</td>
					<td>{{$item->codeno}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->price}}MMK</td>
					<td>
					<a href="" class="btn btn-success">Detail</a>
				   <a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>
				   <form action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are You Sure To Delete?')" class="d-inline-block" method="POST">
				   	@csrf
				   	@method("DELETE")
				    <button class="btn btn-info" type="submit">Delete</button>
				</form>
			</td>
				</tr>
				@endforeach
				</tbody>
			
		</table>
	</div>
</div>

@endsection