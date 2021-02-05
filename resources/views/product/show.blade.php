@extends('layouts.layout1')

@section('content')
@if ($message = Session::get('deletepro'))
<div class="alert alert-success">
    <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
   
    <x-package-alert type="success"  message=" {{ $message }}"/> 
</div>
@endif
@if ($message = Session::get('successuppro'))
<div class="alert alert-success">
    <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
        <x-package-alert type="success"  message=" {{ $message }}"/> 

</div>
@endif
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
    <x-package-alert type="success"  message="     {{ $message }}"/> 

</div>
@endif

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Table Dark Basic</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <a href="/products/create" class="btn btn-success btn-circle-lg" role="button"> <i class="fas fa-plus"></i></a>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table Product</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Product_Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Number</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)

                            <tr>

                                <th scope="row">{{$product->id}}</th>
                                <td>
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="{{$product->image}}" alt="Card image cap">

                                    </div>
                                </td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->price}}</td>
                                <td> @if(strval($product->number) < 55) <span class="" style="color:red">{{$product->number}}</span>

                                        @else
                                        <span style="color:green">{{$product->number}}</span>

                                        @endif
                                </td>
                                <td>
                                    <a href="/products/{{$product->id}}/edit" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i class="fas fa-edit"></i> Edit</a>
                                </td>
                                <td>
                                    <form class="user" action="products/{{ $product->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure')" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                        <!-- <input type="submit" onclick="return confirm('Are you sure')" class="btn btn-danger" value="Delete"></input> -->
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection