<footer class="footer" >
    <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>



        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <div class="copyright">

                    © 2015, All rights reserved

                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <div class="design ">

                    <a href="#">Prince </a> |  <a target="_blank" href="http://www.webenlance.com">Web Design & Development by Mangal Hang Limbu</a>

                </div>

            </div>

        </div>

    </div>

</footer>
</div>
<!-- /#wrapper -->



<!-- jQuery -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>--}}

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
