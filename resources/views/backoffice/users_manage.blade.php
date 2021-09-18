@extends('layouts.app')
@section('content')
<div id="header-title">
    <h3>Users Manage</h3>
    <a href="{{route('register')}}" class="btn btn-success">ADD USER</a>
</div>
    <table class="table table-striped">
        <tr>
            <td class="table-dark">ID</td>
            <td class="table-dark">Name</td>
            <td class="table-dark">Email</td>
            <td class="table-dark">Created At</td>
            <td class="table-dark"></td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><small>{{$user->created_at}}</small></td>
            <td><a href="{{route('getUser', ['id' => $user->id])}}" class="btn btn-secondary">Edit</a> | <a href="" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </table>
@endsection