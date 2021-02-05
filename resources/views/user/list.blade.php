@extends('layouts.layout1')

@section('content')

<div class="row">
    <div class="col-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
            <x-package-alert type="success" message="     {{ $message }}" />

        </div>
        @endif
        @if ($message = Session::get('deleteuser'))
        <div class="alert alert-success">
            <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
            <x-package-alert type="success" message="     {{ $message }}" />

        </div>
        @endif
        @if ($message = Session::get('successpro'))
        <div class="alert alert-success">
            <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
            <x-package-alert type="success" message="     {{ $message }}" />

        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách</h4>
                {{-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you--}}
                {{-- need to do to use it with your own tables is to call the construction--}}
                {{-- function:<code> $().DataTable();</code>. You can refer full documentation from here--}}
                {{-- <a href="https://datatables.net/">Datatables</a></h6>--}}
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="zero_config_length">
                                    <label>Show <select name="zero_config_length" aria-controls="zero_config" class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6" style="text-align: right;">
                                <div id="zero_config_filter" class="dataTables_filter">
                                    <a href="users/create" class="btn btn-info" role="button"> <i class="fa fa-plus"></i> Add User</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap dataTable" role="grid" aria-describedby="zero_config_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 0px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 0px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 0px;">Email</th>
                                            {{-- <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 0px;">Age</th>--}}
                                            {{-- <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">Start date</th>--}}
                                            {{-- <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 0px;">Salary</th>--}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr role="row" class="odd">
                                            <td>{{$user->id}}</td>
                                            <td class="sorting_1"><a href="/profiles/{{$user->id}}">{{$user->name}}</a></td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                            <a href="/profiles/create" class="btn btn-secondary" role="button"><i class="fa fa-plus"></i>  Add</a>
                                            </td>
                                            <td>
                                                <form class="user" action="users/{{ $user->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure')" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                    <!-- <input type="submit" onclick="return confirm('Are you sure')" class="btn btn-danger" value="Delete"></input> -->
                                                </form>
                                            </td>

                                            {{-- <td>33</td>--}}
                                            {{-- <td>2008/11/28</td>--}}
                                            {{-- <td>$162,700</td>--}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Name</th>
                                            <th rowspan="1" colspan="1">Email</th>
                                            <th rowspan="1" colspan="1">Token</th>
                                            {{-- <th rowspan="1" colspan="1">Age</th>--}}
                                            {{-- <th rowspan="1" colspan="1">Start date</th>--}}
                                            {{-- <th rowspan="1" colspan="1">Salary</th>--}}
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="zero_config_previous">
                                            <a href="#" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="zero_config" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                        </li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                        </li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                        </li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                        </li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                        </li>
                                        <li class="paginate_button page-item next" id="zero_config_next"><a href="#" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection