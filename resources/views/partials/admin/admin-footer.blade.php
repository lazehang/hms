
</div>
<!-- /#wrapper -->



<!-- jQuery -->
<script src="{{asset("assets/js/jquery.js")}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>--}}
<script type="text/javascript" src="{{asset('assets/Admin/bootstrap/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js
"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset("assets/Admin/bootstrap/js/bootstrap.min.js")}}"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
