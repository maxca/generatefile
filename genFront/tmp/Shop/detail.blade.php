@extends('layout')
@section('title',$title)
@section('content')
 {{dump("detail")}}
 {{dump($data)}}
@endsection
@push('extends-scripts')
  @include('shop.script')
@endpush
@push('extends-style')
  @include('shop.style')
@endpush