@extends('layout')
@section('title',$title)
@section('content')

 {{dump("create view")}}
 <div class="row">
 	<div class="col-md-6">
 		@if(count($errors) > 0)
 		<span class="input-text">
 			{{ $errors->first() }}
 		</span>
 		@endif
 		 {!! Form::open(['route' => 'product.post.create','class' => 'form form-control']) !!}
 		 <div class="input-block">
 		 	<span class="input-text">
 		 		<i class="fa fa-upload"></i> please insert  id
 		 	</span>
 		 	{!! Form::text('id','',['class' => 'form-control','placeholder' => 'input  id']) !!}
 		 	{!! Form::button('submit',['type'=> 'submit','class' => 'btn btn-primary'])!!}
 		 </div>
 		 {!! Form::close() !!}
 	</div>
 </div>

@endsection
@push('extends-scripts')
  @include('product.script')
@endpush
@push('extends-style')
  @include('product.style')
@endpush
