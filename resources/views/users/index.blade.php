@extends('layouts.app')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Active Users</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('/users/create')}}" title="Add user and post"> <i class="fas fa-plus-circle"></i>
                    </a>
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
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                    <a href="{{url('/users/'.$user->id)}}" title="show user's posts">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection