<!doctype html>
<html {{ get_language_attributes() }}>
  @include('partials.head')
  <body @php body_class(['Body']) @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header', ['class' => 'Body__Header'])
    <main class="Body__Main">
      @yield('content')
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.footer', ['class' => 'Body__Footer'])
    @php wp_footer() @endphp
  </body>
</html>
