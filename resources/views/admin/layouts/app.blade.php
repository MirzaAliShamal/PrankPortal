@extends('admin.layouts.master')
@section('content')
  <div class="wrapper">
    @include('admin.partials.navbar') 
    <div class="content-wrapper">
      @yield('panel')
    </div>
    @include('admin.partials.footer')
  </div>
@endsection