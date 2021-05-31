@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Posts by {{$name}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('/users')}}" title="return"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th style="width: 20%">Title</th>
            <th style="width: 50%">Body</th>
            <th style="width: 15%">Created At</th>
            <th style="width: 15%">Updated At</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
            </tr>
        @endforeach
    </table>

@endsection