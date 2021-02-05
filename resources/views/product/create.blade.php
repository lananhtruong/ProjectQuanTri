@extends('layouts.layout1')

@section('content')



<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"></h2>
                        <!-- <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>   Add</button> -->
                        <!-- <a href="/profiles/create" class="btn btn-primary" role="button"> <i class="zmdi zmdi-plus"></i> Add</a> -->

                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Products</h3>
                            </div>
                            <hr>
                            <form action="{{ route('products.store') }}" method="POST" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Product_name</label>
                                    <input type="text" name="product_name" class="form-control form-control-user" id="product_name" placeholder="Product_name" value="">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Price</label>
                                            <input type="number" name="price" class="form-control form-control-user" id="price" placeholder="Price" value="">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Number</label>
                                            <input type="number" name="number" class="form-control form-control-user" id="number" placeholder="Number" value="">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image</label>
                                    <input type="text" class="form-control form-control-user" name="image" id="image" placeholder="Image" value="">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fas fa-plus"></i>&nbsp;
                                        <span id="payment-button-amount">Add Product</span>
                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection