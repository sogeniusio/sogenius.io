<script type="text/javascript" src="/js/libs/jquery.js"></script>
<script type="text/javascript" src="/js/libs/common.js"></script>
<script type="text/javascript" src="/js/libs/prism.js"></script>
<script type="text/javascript" src="/bower_components/bootstrap-css/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/elements/js/elements.js"></script>
<script type="text/javascript" src="/js/custom/main.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/bower_components/toastr/toastr.min.js"></script>

<script type="text/javascript" src="/bower_components/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="/bower_components/instafeed.js/instafeed.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
<script type="text/javascript" src="/bower_components/fluidbox/dist/js/jquery.fluidbox.min.js"></script>
<script type="text/javascript" src="/bower_components/aos/dist/aos.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript">
// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
    }
});
$('#return-to-top').click(function() { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 500);
});
</script>
@yield('scripts')
<script type="text/javascript" src="/js/ig.js"></script>
