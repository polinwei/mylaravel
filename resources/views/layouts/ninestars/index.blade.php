<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.ninestars.header')
<body>
  <!-- ======= Header ======= -->
  @include('layouts.ninestars.page-header')
  <!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  @hasSection ('page-intro')
    @section('page-intro')
    @show   
  @endif
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    @hasSection ('page-about')
      @section('page-about')          
      @show        
    @endif
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    @hasSection ('page-services')
      @section('page-services')          
      @show        
    @endif
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    @hasSection ('page-portfolio')
      @section('page-portfolio')          
      @show        
    @endif
    <!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    @hasSection ('page-faq')
      @section('page-faq')          
      @show        
    @endif
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    @hasSection ('page-team')
      @section('page-team')          
      @show        
    @endif
    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    @hasSection ('page-clients')
      @section('page-clients')          
      @show        
    @endif
    <!-- End Clients Section -->

    <!-- ======= Contact Us Section ======= -->
    @hasSection ('page-contact')
      @section('page-contact')          
      @show        
    @endif
    <!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.ninestars.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ Vite::asset('resources/ninestars/vendor/aos/aos.js') }}"></script>
  <script src="{{ Vite::asset('resources/ninestars/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ Vite::asset('resources/ninestars/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ Vite::asset('resources/ninestars/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ Vite::asset('resources/ninestars/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ Vite::asset('resources/ninestars/vendor/php-email-form/validate.js') }}"></script>
  <!-- Template Main JS File-->
  <script src="{{ Vite::asset('resources/ninestars/js/main.js') }}"></script>
  
</body>

</html>