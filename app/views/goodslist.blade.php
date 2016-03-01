@extends('layout')

@section('content')
	@foreach($alldata as $user)
	    <!--  <p><?php echo $user->name;?></p> -->
	 <p>{{ $user->name }}</p>
	@endforeach
	{{ $alldata->links() }}
	<!--<?php echo $alldata->appends(array('sort' => 'votes'))->links(); //url加入参数 ?>  -->
	{{-- {{ $title }} --}}
	{{ $title or '123' }}
	{{-- @{{ $title }} --}}
   {{ Form::open(array('url' => 'junny', 'files' => true , 'method' => 'put')) }}
    {{-- Form::text('username','example@gmail.com') --}}
    {{-- Form::password('password') --}}
    {{-- Form::checkbox('name', 'value', true) --}}
    {{  Form::number('name', 'value' , array('style' => 'width:40px')) }}
    {{ Form::label('email', 'Email') }}{{ Form::text('email') }}
    {{-- Form::file('image') --}}
    {{-- Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S') --}}
   {{ Form::close() }}
@stop