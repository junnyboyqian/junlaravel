@extends('layout')

@section('content')

       @foreach($users as $user)
       <!-- <p><?php echo $user->name;?></p> -->
        <p>{{ $user->name }}</p>
	   @endforeach
@stop