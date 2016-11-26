  @include('_head')
  <body>
  @include('_nav') 

    <div class="container">
      @include('partials._messages')
      {{-- {{ Auth::check() ? "Logged in" :"Logged out"}} --}}
      @yield('content')
    <hr>
    <p class="text-center">Copyrights Rkwidama {{date('Y')}} - All rights Reserved</p>
    </div>
  @include('_js')
  @yield('scripts')
  </body>
</html>


