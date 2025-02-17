<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PDRRMO</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
<link href="{{ asset('assets/img/final-logo.png') }}" rel="icon">
<link href="{{ asset('assets/img/final-logo.png') }}" rel="apple-touch-icon">


<<<<<<< HEAD
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

=======
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
>>>>>>> f2ebacf4ea37a7b81a751f80ee0312768b0af3d3

 <!-- Vendor CSS Files -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="{{ route('about-pdrrmo.index') }}" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('assets/img/final-logo.png') }}" alt="">
        <h3 class="sitename">PDRRMO ILOILO</h3>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="nav-item"><a href="{{ route('pdrrmo-home.index') }}" class="nav-link active">Home</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{ route('about-pdrrmo.index') }}" class="dropdown-item">About PDRRMO</a></li>
                <li><a href="{{ route('about-pdrrmc.index') }}" class="dropdown-item">About PDRRMC</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Programs and Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{ route('programs-services.external-services.index') }}" class="dropdown-item">External Services</a></li>
                <li><a href="{{ route('programs-services.internal-services.index') }}" class="dropdown-item">Internal Services</a></li>
                <li><a href="{{ route('programs-services.rescue-operations.index') }}" class="dropdown-item">Rescue Operations</a></li> 
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Operations Center</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li class="nav-item"><a href="{{ route('operations-center.index') }}" class="nav-link">Resources</a></li>
            </ul>
          </li>
          
          {{-- <li class="nav-item"><a href="{{ route('operations-center.index') }}" class="nav-link">Operations Center</a></li> --}}
          <li class="nav-item">
            <a href="{{ route('contact.index') }}" class="btn" style="background-color: #fe6305; color: white; font-size: 14px; padding: 5px 15px; text-align: center; border-radius: 50px;">Emergency Contact</a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button btn btn-danger">
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </button>
        </form>
        @endauth
     </div>
    
    </div>
  </header>

  <main id="content" class="flex-grow-1">
    @yield('content')
 </main>

    <!-- Footer Section -->
    <footer class="footer bg-light text-dark py-4">
      <hr>
  
      <!-- Responsive Contact and Social Links -->
      <div class="container">
          <div class="d-block d-md-table w-100">
              <table class="table table-borderless text-start d-none d-md-table">
                  <colgroup>
                      <col style="width: 29%;">
                      <col style="width: 10%;">
                      <col style="width: 20%;">
                      <col style="width: 20%;">
                      <col style="width: 20%;">
                  </colgroup>
                  <tbody>
                      <tr>
                          <td class="text-center" rowspan="2" style="width: 400px;">
                              {{-- <img src="{{ asset('assets/img/CapitolSeal.png') }}" alt="Logo 1" style="height: 60px;">
                              <img src="{{ asset('assets/img/final-logo.png') }}" alt="Logo 2" style="height: 60px;">
                              <img src="{{ asset('assets/img/BagongPilipinas.png') }}" alt="Logo 3" style="height: 60px;">
                              <img src="{{ asset('assets/img/MoRProGres.png') }}" alt="Logo 4" style="height: 60px;"> --}}
                          </td>
                          <td><strong>Contact Us</strong></td>
                          <td><i class="bi bi-geo-alt-fill"></i> 3rd Floor, Left Wing, Iloilo Provincial Capitol, Bonifacio Drive, Iloilo City</td>
                          <td><i class="bi bi-envelope"></i> <a href="mailto:pdrrmo_iloilo@yahoo.com.ph">pdrrmo_iloilo@yahoo.com.ph</a></td>
                          <td><i class="bi bi-telephone"></i> (033) 328-7920 / 328-7900</td>
                      </tr>
                      <tr>
                          <td><strong>Follow Us</strong></td>
                          <td><a href="https://www.facebook.com/iloilopdrrmo" class="text-dark"><i class="bi bi-facebook" style="color: #1877F2"></i> PDRRMO Iloilo</a></td>
                          <td><a href="https://www.facebook.com/profile.php?id=61570456584511" class="text-dark"><i class="bi bi-facebook" style="color: #1877F2"></i> Operation Center PDRRMO Iloilo</a></td>
                          <td></td>
                      </tr>
                  </tbody>
              </table>
  
              <!-- Mobile Version (Stacked View) -->
              <div class="d-md-none text-center">
                  <div class="mb-3">
                      {{-- <img src="{{ asset('assets/img/jpg.png') }}" alt="Logo 1" style="height: 50px;">
                      <img src="{{ asset('assets/img/final-logo.png') }}" alt="Logo 2" style="height: 50px;">
                      <img src="{{ asset('assets/img/BagongPilipinas.png') }}" alt="Logo 3" style="height: 50px;">
                      <img src="{{ asset('assets/img/MoRProGres.png') }}" alt="Logo 4" style="height: 50px;"> --}}
                  </div>
                  <p><strong>Contact Us</strong></p>
                  <p><i class="bi bi-geo-alt-fill"></i> 3rd Floor, Left Wing, Iloilo Provincial Capitol, Bonifacio Drive, Iloilo City</p>
                  <p><i class="bi bi-envelope"></i> <a href="mailto:pdrrmo_iloilo@yahoo.com.ph">pdrrmo_iloilo@yahoo.com.ph</a></p>
                  <p><i class="bi bi-telephone"></i> (033) 328-7920 / 328-7900</p>
                  <p><strong>Follow Us</strong></p>
                  <p>
                      <a href="https://www.facebook.com/iloilopdrrmo" class="text-dark"><i class="bi bi-facebook" style="color: #1877F2"></i> PDRRMO Iloilo</a><br>
                      <a href="https://www.facebook.com/profile.php?id=61570456584511" class="text-dark"><i class="bi bi-facebook" style="color: #1877F2"></i> Operation Center PDRRMO Iloilo</a>
                  </p>
              </div>
          </div>
      </div>
  
      <hr>
  
      <!-- Responsive Footer Bottom -->
      <div class="container">
          <table class="table table-borderless d-none d-md-table">
              <colgroup>
                  <col style="width: 34%;">
                  <col style="width: 35%;">
                  <col style="width: 32%;">
              </colgroup>
              <tbody>
                  <tr>
                      <td class="text-start">Provincial Disaster Risk Reduction & Management Office (PDRRMO)</td>
                      <td class="text-center">© 2025 All Rights Reserved</td>
                      <td></td>
                  </tr>
              </tbody>
          </table>
  
          <!-- Mobile Version -->
          <div class="d-md-none text-center">
              <p>Provincial Disaster Risk Reduction & Management Office (PDRRMO)</p>
              <p>© 2025 All Rights Reserved</p>
          </div>
      </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script> --}}
  
  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  

</body>

</html>