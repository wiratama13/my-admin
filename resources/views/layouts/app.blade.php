@include('includes.admin.head')
@stack('prepend-style')
<body>

 @yield('content')

  @include('includes.admin.script')
  @stack('addon-script')
</body>

</html>

