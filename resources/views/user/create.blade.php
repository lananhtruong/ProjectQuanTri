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
                                <h3 class="text-center title-2">Add User</h3>
                            </div>
                            <hr>
                            <form action="{{ route('users.store') }}" method="POST" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Name</label>
                                    <input type="text" name="name" class="form-control form-control-user" id="name" placeholder="Full Name" value="">
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Email</label>
                                    <input type="email" name="email" class="form-control form-control-user" id="email" placeholder="Email" value="">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Role_id</label>
                                    <input type="email" name="role_id" class="form-control form-control-user" id="role_id" placeholder="role_id" value="">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Password</label>
                                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password" value="">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                             
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fas fa-plus"></i>&nbsp;
                                        <span id="payment-button-amount">Add User</span>
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