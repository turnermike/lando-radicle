{{--
    Template Name: Custom Template
--}}

--- template-custom.blade.php ---

@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
