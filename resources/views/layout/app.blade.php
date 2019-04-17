@include('includes.head')
<div id="app">
    @include('includes.navbar')
    @include('includes.errors')
    @yield('content')
</div>
@include('includes.footer')
