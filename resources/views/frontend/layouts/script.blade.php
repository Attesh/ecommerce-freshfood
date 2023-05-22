 <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/mixitup.min.js')}}"></script>

    <script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->

<script type="text/javascript">
    console.log("oi love ");
    $('.hero__categories').on('click', function(){
      console.log("oi hate ");
      // $('.nav-item a.current').removeClass('current');
      $('.navbar .navbar-toggler' ).addClass('collapsed');
      console.log("no no no ");
      $('#navbarCollapse' ).removeClass('show');
    });
</script>
<script> 
    const li1=document.getElementById("1");
    const li2=document.getElementById("2"); 
    const li3=document.getElementById("3"); 
    const li4=document.getElementById("4"); 
    const tab1=document.getElementById("t1");
    const tab2=document.getElementById("t2");
    const tab3=document.getElementById("t3");
    const tab4=document.getElementById("t4");
    
    function myFunction1() {
        console.log('fun1');
        if (tab1.style.display === "none") {
            tab1.style.display = "block";
            tab2.style.display = "none";
            tab3.style.display = "none";
            tab4.style.display = "none";

            li1.classList.add("active");
            li2.classList.remove("active");
            li3.classList.remove("active");
            li4.classList.remove("active");
            
            
        } 
    }
    function myFunction2() {
        console.log('fun2');
        if (tab2.style.display === "none") {
            tab1.style.display = "none";
            tab3.style.display = "none";
            tab4.style.display = "none";
            tab2.style.display="block";
            

            li2.classList.add("active");
            li1.classList.remove("active");
            li4.classList.remove("active");
            li3.classList.remove("active");
            
        }
    }
    function myFunction3() {
        console.log('fun3');
        if (tab3.style.display === "none") {
            tab1.style.display = "none";
            tab2.style.display = "none";
            tab4.style.display = "none";
            tab3.style.display="block";
            
            li3.classList.add("active");
            li4.classList.remove("active");
            li2.classList.remove("active");
            li1.classList.remove("active");
        } 
    }

    function myFunction4() {
        console.log('fun4');
        if (tab4.style.display === "none") {
            tab1.style.display = "none";
            tab2.style.display = "none";
            tab3.style.display = "none";
            tab4.style.display="block";
            
            li4.classList.add("active");
            li3.classList.remove("active");
            li2.classList.remove("active");
            li1.classList.remove("active");
        } 
    }
</script>
    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>


   
</body>

</html>