 <footer>
        <div class="container">
            {{--<h1>Prince Boys Hostel</h1>--}}
            <div class="social">
                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-dribbble fa-2x"></i></a>
            </div>
            <h6>&copy; 2016 Prince Boys Hostel -Kamalpokhari- | site by Mangal Hang Limbu</h6>
        </div>
    </footer>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset ("assets/bootstrap-assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset ("assets/js/custom.js") }}"></script>
    <!-- JS PLUGINS -->
    <script src="{{ asset ("assets/plugins/owl-carousel/owl.carousel.min.js") }}"></script>
    <script src="{{ asset ("assets/js/jquery.easing.min.js") }}"></script>
    <script src="{{ asset ("assets/plugins/waypoints/jquery.waypoints.min.js") }}"></script>
    <script src="{{ asset ("assets/plugins/countTo/jquery.countTo.js") }}"></script>
    <script src="{{ asset ("assets/plugins/inview/jquery.inview.min.js") }}"></script>
 <script src="{{ asset ("assets/plugins/Lightbox/dist/js/lightbox.min.js") }}"></script>
    
    <script src="{{ asset ("assets/plugins/WOW/dist/wow.min.js") }}"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

 <script>
     $('#exampleModal').on('show.bs.modal', function (event) { var button = $(event.relatedTarget) // Button that triggered the modal var recipient = button.data('whatever') // Extract info from data-* attributes // If necessary, you could initiate an AJAX request here (and then do the updating in a callback). // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead. var modal = $(this) modal.find('.modal-title').text('New message to ' + recipient) modal.find('.modal-body input').val(recipient) })
 </script>


</body>
</html>