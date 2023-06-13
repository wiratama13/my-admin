@include('includes.general.head')
@stack('prepend-style')
<body>

  <!-- Header Area Start -->
 {{-- @include('includes.general.navbar') --}}

 @yield('content')

  <!-- Footer Start -->
  {{-- @include('includes.general.footer') --}}
  <!-- ##### Footer End ##### -->

  @include('includes.general.script')
  @stack('addon-script')
</body>

</html>

