@extends('layouts.layout1')
@section('content')
<header>
    <style>
        /* Reset Select */
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            outline: 0;
            box-shadow: none;
            border: 0 !important;
            background: #2c3e50;
            background-image: none;
        }

        /* Remove IE arrow */
        select::-ms-expand {
            display: none;
        }

        /* Custom Select */
        .select {
            position: relative;
            display: flex;
            width: 16em;
            height: 3em;
            line-height: 3;
            background: #2c3e50;
            overflow: hidden;
            border-radius: .25em;
        }

        select {
            flex: 1;
            padding: 0 .5em;
            color: #fff;
            cursor: pointer;
        }

        /* Arrow */
        .select::after {
            content: '\25BC';
            position: absolute;
            top: 0;
            right: 0;
            padding: 0 1em;
            background: #34495e;
            cursor: pointer;
            pointer-events: none;
            -webkit-transition: .25s all ease;
            -o-transition: .25s all ease;
            transition: .25s all ease;
        }

        /* Transition */
        .select:hover::after {
            color: #f39c12;
        }
    </style>
</header>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"></h2>
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Edit Article</h3>
                                <!-- lấy thông tin thông báo đã thêm vào session để hiển thị -->
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
                                    <x-package-alert type="success" message="{{ $message }}" />
                                </div>
                                @endif

                                <!-- lấy thông tin lỗi khi validate hiển thị trên màn hình -->
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
                                    <li>{{ $message }} </li>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <x-package-alert type="danger" message="{{ $error }}" />
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            <hr>
                            <form class="user" action="{{ route('articles.update',['article' => $article->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- khai báo này dùng để thiết lập phương thức PUT 
									nếu không khai báo thì khi submit không thiết lập HttpPUT -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">user_id</label>
                                            <input type="integer" class="form-control form-control-user" name="user_id" id="user_id" placeholder="user_id" value="{{$article->user_id}}" disabled>
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">status</label>
                                            <input type="text" name="product_name" class="form-control form-control-user" id="status" placeholder="status" value="{{$article->status}}">
                                        </div> -->
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Status</label>
                                            <div class="select" >
                                                <select name="status" id="status">
                                                    <option value="{{$article->status}}" selected disabled>{{$article->status}}</option>
                                                    <option value="Processing">Processing</option>
                                                    <option value="Has been processed">Has been processed</option>
                                                    <option value="Transpor">Transpor</option>
                                                    <option value="Finish">Finish</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">title</label>
                                    <input type="text" class="form-control form-control-user" name="title" id="title" placeholder="title" value="{{$article->title}}" disabled>
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">body</label>
                                    <input type="text" class="form-control form-control-user" name="body" id="body" placeholder="body" value="{{$article->body}}" disabled>
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div>
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-paper-plane"></i>&nbsp;
                                            <span id="payment-button-amount">Save</span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                        </button>
                                    </div>
                                    <!-- <input type="submit" class="btn btn-primary" value="Update"> -->
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