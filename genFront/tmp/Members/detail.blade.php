@extends('layout')
@section('title',$title)
@section('content')
 {{dump("detail")}}
 {{dump($data)}}
@endsection
@push('extends-scripts')
  @include('members.script')
@endpush
@push('extends-style')
  @include('members.style')
@endpush
