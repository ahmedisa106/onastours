<!-- jQuery 3 -->
<script src="{{ adminurl('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ adminurl('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ adminurl('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ adminurl('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ adminurl('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ adminurl('dist/js/demo.js')}}"></script>
{{--ckeditor--}}
<script src="{{asset('assets/admin/plugins/ckeditor/ckeditor.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>

{{-- swal("Good job!", "You clicked the button!", "success"); put it in a ceparate file with its script --}}
{{-- and include it. --}}

@yield('javascript')
