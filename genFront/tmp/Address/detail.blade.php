@extends('layout')
@section('title',$title)
@section('content')
 {{dump("detail")}}
 {{dump($data)}}
@endsection
@push('extends-scripts')
  @include('address.script')
@endpush
@push('extends-style')
  @include('address.style')
@endpush