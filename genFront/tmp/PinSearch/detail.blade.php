@extends('layout')
@section('title',$title)
@section('content')
 {{dump("detail")}}
 {{dump($data)}}
@endsection
@push('extends-scripts')
  @include('pinsearch.script')
@endpush
@push('extends-style')
  @include('pinsearch.style')
@endpush
