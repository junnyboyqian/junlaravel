@extends('layout')

@section('content')
	@foreach($alldata as $user)
	       <p><?php echo $user->name;?></p>
	<!-- <p>{{ $user->name }}</p> -->
	@endforeach
	<?php echo $alldata->links(); ?>
@stop