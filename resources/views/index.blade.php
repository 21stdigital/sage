@extends('layouts.app')

@section('content')
    @if (!have_posts())
        {{ __('Sorry, no results were found.', 'sage') }}
    @endif

    @while (have_posts()) @php the_post() @endphp
        @php(get_the_title())
    @endwhile
@endsection