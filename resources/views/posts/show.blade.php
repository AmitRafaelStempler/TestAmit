@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Post's Title: {{$post->title}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('/users')}}" title="return"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <p>{{$post->body}}</p>
        </div>
    </div>

@endsection