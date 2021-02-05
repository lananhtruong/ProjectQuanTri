@extends('layouts.layout1')

@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Order data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>User</th>
                        <th>Address</th>
                        <th>Create At</th>
                        <th>Products</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td><a href="/profiles/{{$article->user_id}}">{{$article->user->name}}</a></td>
                        <td style="text-align: justify;">{{$article->body}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>
                            @foreach($article->tags as $tag)
                            <a href="#">{{$tag->tag}} </a> ,
                            @endforeach
                        </td>

                        <td style="text-align: center;">
                            {{$article->status}}
                            <a href="/articles/{{$article->id}}/edit" class="btn btn-primary" role="button">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
