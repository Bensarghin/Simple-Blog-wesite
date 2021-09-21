@extends('layouts.app')
@section('content')
	<div id="header-title">
	    <h3>Write a blog</h3>
	</div>
	{{-- , ['id' => Auth::user()->id]) --}}
	<form action="{{route('blog.add')}}" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{Auth::user()->id}}">
		<div class="mb-3">   
			<label for="title" class="form-label">title :</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="mb-3">
			<label for="title" class="form-label">your Blog :</label>
			<textarea class="form-control" name="content" rows="5"></textarea>
		</div>
		<input type="submit" name="" value="post" class="btn btn-dark">
	</form>

	

@endsection