<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ango Crystal</title>

    {{-- bootstrap & css --}}
    <link rel="stylesheet" href="{{ '/CSS/bootstrap.min.css' }}">
    <link rel="stylesheet" href="{{ '/CSS/style.css' }}">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- bootstrap icon cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('image/logo.png')}}" type="image/x-icon">

    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


</head>

<body>
      <header id="header">
        <nav class="navbar navbar-expand-sm bg-body-white fixed-top">
            <div class="container-fluid">
                {{-- logo --}}
                <a class="navbar-brand ms-4 d-flex align-items-center" href="{{ route('home')}}">
                  <img src="{{ asset('image/logo.png')}}" alt="" class="img-fluid" height="" width="">
                </a>

                {{-- hamburger button --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Ango Crystal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 navbar-list">
                            <li class="nav-item">
                              <a class="{{Request::routeIs('home') ? 'active' : ''}} nav-link" href="{{ route('home')}}">Home</a>
                          </li>
                            <li class="nav-item">
                                <a class="{{Request::routeIs('about') ? 'active' : ''}} nav-link" href="{{ route('about')}}">About us</a>
                            </li>
                            <li class="nav-item">
                              <a class="{{Request::routeIs('management') ? 'active' : ''}} nav-link" href="{{ route('management')}}">Management</a>
                            </li>
                            <li class="nav-item">
                              <a class="{{Request::routeIs('news-blog') ? 'active' : ''}} nav-link" href="{{ route('news-blog')}}">News & Events</a>
                            </li>
                            <li class="nav-item">
                              <a class="{{Request::routeIs('gallery') ? 'active' : ''}} nav-link" href="{{ route('gallery')}}">Gallery</a>
                            </li>
                            <li class="nav-item">
                              <a class="{{Request::routeIs('contact') ? 'active' : ''}} nav-link" href="{{ route('contact')}}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
      </header>
      {{-- alert message --}}
      @if (session()->has('message'))
            {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" data-bs-delay="5000"></button>
            </div> --}}

            <div class="container-fluid">
                <div class="row alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="col-9">
                        {{ session()->get('message') }}
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary">Logout</button>
                                </form>
                            </div>
                            <div class="col">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" data-bs-delay="5000"></button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        @endif



      {{-- back to top --}}
      <button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="back-to-top">
        <i class="fas fa-arrow-up"></i>
      </button>

    {{-- second nav --}}
    {{-- <nav>
      <div class="container">
        <h1 class="logo">My Website</h1>
        <ul class="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <div class="toggle"></div>
      </div>
    </nav> --}}

    @yield('content')



    {{-- newsletter --}}
      <div id="newsletter" class="d-flex align-items-center mb-1" style="background-image: url('{{ asset('image/newsletter-bg.png')}}');">

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-xs-10 col-xxs-10 mx-auto">
          <p class="text-center newsletter-text">
          Better <span class="newsletter-orange-text">education</span> for a better world.<br> <span class="newsletter-orange-text">Investment</span> in <span class="newsletter-orange-text">knowledge</span> pays the best <span class="newsletter-orange-text">interest.</span>
          </p>

          <form action="{{ route('newsletter.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Enter e-mail to receive news letter" style="height: 50px"  name="email" @error('email') is-invalid @enderror value="{{ old('email') }}">

              <button class="btn message-button"><i class="fa-solid fa-paper-plane ps-2 pe-2" style="color: #ffffff; font-size: 30px"></i></button>
            </div>
          </form>
          @error('email')
              <small class="text-warning">{{ $message }}</small>
            @enderror
        </div>

      </div>

      <!-- footer -->
      <footer class="custom-footer-styling">
            <div class="container-fluid row">

                <div class="col-lg-4 col-md-8 my-3 custom-footer-item0">
                  <a href="{{ route('home')}}" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="{{asset('image/footer_logo.png')}}" height="50px" alt="">
                  </a>
                  <p class="text-light">
                      Ango Crystal Academy is an outstanding school targeting educational system, helping kids to read and write and guide on hands on to establish a strong identity.
                  </p>
                </div>

                <div class="col-lg-2 col-md-4 my-5 custom-footer-item1">
                  <h5>Link</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('home')}}" class="nav-link p-0 text-light hover-underline-animation">Home</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('about')}}" class="nav-link p-0 text-light hover-underline-animation">About Us</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('management')}}" class="nav-link p-0 text-light hover-underline-animation">Management</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('news-blog')}}" class="nav-link p-0 text-light hover-underline-animation">News and event</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('gallery')}}" class="nav-link p-0 text-light hover-underline-animation">Gallery</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('contact')}}" class="nav-link p-0 text-light hover-underline-animation">Contact Us</a></li>
                  </ul>
                </div>

                <div class="col-lg-4 col-md-8 my-5 custom-footer-item2">
                  <h5>Find Us</h5>
                  <p><i class="fa-solid fa-location-dot"></i> 23 Victor Anene Bossua Street, GRA, Asaba, Delta State.</p>
                  <p><i class="fa-sharp fa-solid fa-envelope"></i> Angoacad@gmail.com</p>
                  <p><i class="fa-solid fa-phone"></i> +2349021063261</p>
                </div>

                <div class="col-lg-2 col-md-4 my-5 custom-footer-item3">
                  <h5>Social Contact</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light hover-underline-animation"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light hover-underline-animation"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light hover-underline-animation"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light hover-underline-animation"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light hover-underline-animation"><i class="fa-brands fa-telegram"></i> Telegram</a></li>
                  </ul>
                </div>

            </div>

            <div class="container-fluid row py-4">
                <div class="col d-flex justify-content-center custom-footer-item4">
                    <p>Copyright © 2023. All Right Reserved.</p>
                </div>
            </div>

      </footer>

    <script src="{{ '/js/bootstrap.min.js' }}"></script>
    <script src="{{ '/js/script.js' }}"></script>

    <!-- Adding scripts to use bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    {{-- end of my javascript --}}
    <script src="{{ '/js/script.js' }}"></script>


    <script src="{{ 'vendor/glightbox/js/glightbox.min.js' }}" ></script>

    <script src="{{ 'vendor/swiper/swiper-bundle.min.js' }}"></script>
    <script src="{{ 'vendor/typed.js/typed.min.js' }}"></script>
    <script src="{{ 'vendor/waypoints/noframework.waypoints.js' }}"></script>
      <!-- Template Main JS File -->
    <script src="{{ '/js/main.js' }}"></script>

</body>

</html>
