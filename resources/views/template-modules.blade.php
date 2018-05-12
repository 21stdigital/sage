{{--
  Template Name: Modules
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.modules')
  @endwhile
@endsection
