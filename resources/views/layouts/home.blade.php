@include('includes.general.head')
@stack('prepend-style')
<body>

  <!-- Google Tag Manager (noscript) && -->
  <!-- menu responsive -->
  @include('includes.general.responsive')

  <!-- Header Area Start -->
 @include('includes.general.navbar')

 @yield('content')
  <!-- Footer Start -->
  @include('includes.general.footer')
  <!-- ##### Footer End ##### -->

  @include('includes.general.script')
</body>

</html>
<style>

</style>
