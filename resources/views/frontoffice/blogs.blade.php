@extends('layouts.app')
@section('content')

    filter | sort by date > sort by title > 
    @foreach ($blogs as $blog)
        <div class="card" style="margin-bottom:10px">
            <div class="card-header">
            {{$blog->title}}
            </div>
            <div class="card-body">
                <small class="text-muted">{{$blog->created_at}}</small>
                <h5 class="card-title"> {{$blog->title}} </h5>
                <p class="card-text"> {{$blog->content}}</p>
                <a href="#" class="btn btn-link">See comments <i class=""></i></a>
            </div>
        </div>
    @endforeach
@endsection