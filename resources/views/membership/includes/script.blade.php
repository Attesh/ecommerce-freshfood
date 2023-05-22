
    <script src="{{asset('membership/vendor/fontawsome/font.js')}}"></script>

    <script src="{{asset('membership/vendor/owl-carousel/js/jquery.min.js')}}"></script>
    <script src="{{asset('membership/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
  <!-- Vendor JS Files -->
  <script src="{{asset('membership/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('membership/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('membership/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('membership/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('membership/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('membership/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('membership/vendor/php-email-form/validate.js')}}"></script>

  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.js"></script>

     <!-- Template Main JS File -->
    <script src="{{asset('membership/js/main.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#side-nav li .nav-link').click(function() {
                // $('#components-nav li .nav-link.active').removeClass("active");
                $('#side-nav li .nav-link').removeClass("active");
                $(this).addClass("active");

            });
        });
    </script>

    <script>
    jQuery(document).ready(function ($) {
      $('#example').DataTable({
      });
    });

    jQuery(document).ready(function ($) {
      $('#2example').DataTable({
      });
    });

    jQuery(document).ready(function ($) {
      $('#3example').DataTable({
      });
    });

    jQuery(document).ready(function ($) {
      $('#4example').DataTable({
      });
    });
  </script>

</body>

</html>