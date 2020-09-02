@extends('backend/backendtemplate')
@section('backend')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mx-1 mb-0 text-gray-800">Brands List</h1>
            <a href="{{route('brands.create')}}" class="btn btn-success">Add New</a>       
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php  $i=1; @endphp
                @foreach($brands as $brand)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$brand->name}}</td>
                    <td><img src="{{asset($brand->photo) }}" height="50px" width="50px"></td>
                    <td>
                        <a href="" class="btn btn-success">Detail</a>
                        <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection