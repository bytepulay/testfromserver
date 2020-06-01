<!DOCTYPE html>
<html>
<head>
  @include('backend.layouts._partial.meta')
  @include('backend.layouts._partial.css')
 
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
  
  @include('backend.layouts._partial.nav')
  

 
  @include('backend.layouts._partial.sidebar')

  
  <div class="content-wrapper">

    <section class="content">

      @yield('content')

    </section>

  </div>

  @include('backend.layouts._partial.footer')

  
</div>

@include('backend.layouts._partial.script')
<script>
  var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    return this.href == url;
}).addClass('active');

// for treeview
$('ul.nav-treeview a').filter(function() {
    return this.href == url;
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
</script>

@stack('scripts')

</body>
</html>
