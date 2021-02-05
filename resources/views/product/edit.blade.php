@extends('layouts.layout1')

@section('js')
<script>
    $('#image').on('change', function() {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
@endsection

@section('content')

<div class="row m-t-25">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Edit User</h3>
                    <!-- lấy thông tin thông báo đã thêm vào session để hiển thị -->
                    <!-- lấy thông tin thông báo đã thêm vào session để hiển thị -->
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
                        <x-package-alert type="danger" message="{{ $message }}" />
                        @if ($message = Session::get('file'))
                        <x-package-alert type="danger" message="{{ $message }}" />
                        @endif

                    </div>
                    @endif

                    <!-- lấy thông tin lỗi khi validate hiển thị trên màn hình -->
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
                        <x-package-alert type="danger" message="{{ $message }}" />

                        <ul>
                            @foreach ($errors->all() as $error)
                            <x-package-alert type="danger" message="{{ $error }}" />

                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <hr>
                <form class="user" action="{{ route('products.update',['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- khai báo này dùng để thiết lập phương thức PUT 
									nếu không khai báo thì khi submit không thiết lập HttpPUT -->
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Product_name</label>
                        <input type="text" class="form-control form-control-user" name="product_name" id="product_name" placeholder="Product_name" value="{{$product->product_name}}">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Price</label>
                                <input type="number" class="form-control form-control-user" name="price" id="price" placeholder="Price" value="{{$product->price}}">
                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Number</label>
                                <input type="number" class="form-control form-control-user" name="number" id="number" placeholder="Number" value="{{$product->number}}">
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input " id="image" name="image">
                            <label for="avatar" class="custom-file-label">{{$product->image}}</label>
                        </div>
                    </div>
                    <div style=" background-image:url({{$product->image}}); height:84vh;width:auto">

                    </div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa fa-paper-plane"></i></i>&nbsp;
                        <span id="payment-button-amount">Save </span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection