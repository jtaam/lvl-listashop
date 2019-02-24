<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/popper.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/stellar.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/isotope/isotope-min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/mail-script.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/counter-up/jquery.counterup.js')}}"></script>
<script src="{{asset('assets/frontend/js/theme.js')}}"></script>
{{--Toastr--}}
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
@stack('js')