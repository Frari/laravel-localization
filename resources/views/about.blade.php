@extends('layouts.app')

@section('content')
  <h1>@lang('general.about')</h1>
  <p>@lang('routes.text-about')</p>
  <a class="btn btn-primary" href="{{route('home')}}">Home</a>
@endsection
