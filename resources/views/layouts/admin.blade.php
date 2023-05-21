<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Admin</title>

    {{-- favicons --}}
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- bootstrap icon cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'poppins', sans-serif;
        }

        .custom-navbar {
            background-color: #6665B5
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>



    <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow custom-navbar p-3">
        <a class="navbar-brand ms-4 d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="{{ asset('image/logo.png') }}" alt="" class="img-fluid" height="" width="">
        </a>
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>

            <h1 class="text-center">
                Welcome
                {{ $user->name}}
            </h1>
            <p class="d-flex justify-content-center"><small>
                {{ $user->email}}
            </small></p>


    </header>


    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/subheader.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center" style="height: 150px">
            <div class=" ms-4">
                <p class="sub-header-heading">Admin</p>
                <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; Admin
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block text-bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <a href="{{ route('dashboard') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"> &nbsp;
                        <img src="{{ asset('image/footer_logo.png')}}" alt="" width="30px" height="30px">&nbsp;&nbsp;
                        <span class="fs-4">Ango Crystal</span>
                    </a>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="{{ Request::routeIs('dashboard') ? 'active' : ''}} nav-link" href="{{ route('dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::routeIs('blog.create') ? 'active' : ''}} nav-link" href="{{ route('blog.create') }}">
                                Create News & Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::routeIs('newsletter') ? 'active' : ''}} nav-link" href="{{ route('newsletter') }}">
                                Newsletter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::routeIs('gallery.create') ? 'active' : ''}} nav-link" href="{{ route('gallery.create') }}">
                                Upload Gallery
                            </a>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-link" type="submit" style="text-decoration: none">Logout</button>
                            </form>
                        </li>

                    </ul>
                </div>
            </nav>

            {{-- back to top --}}
            <button type="button" class="btn btn-danger btn-floating btn-lg" id="back-to-top">
                <i class="fas fa-arrow-up"></i>
            </button>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('posts')
            </main>
        </div>
    </div>

    <!-- footer -->
    <footer class="custom-footer-styling">
        <div class="container-fluid row p-5">

            <div class="col-lg-4 col-md-8 my-3 custom-footer-item0">
                <a href="{{ route('home') }}"
                    class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="{{ asset('image/footer_logo.png') }}" height="50px" alt="">
                </a>
                <p class="text-light">
                    Ango Crystal Academy is an outstanding school targeting educational system, helping kids to read and
                    write and guide on hands on to establish a strong identity.
                </p>
            </div>

            <div class="col-lg-2 col-md-4 my-5 custom-footer-item1">
                <h5>Link</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0 text-light">Home</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0 text-light">About
                            Us</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('management') }}"
                            class="nav-link p-0 text-light">Management</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('news-blog') }}"
                            class="nav-link p-0 text-light">News and event</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('gallery') }}"
                            class="nav-link p-0 text-light">Gallery</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('contact') }}"
                            class="nav-link p-0 text-light">Contact Us</a></li>
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
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-facebook"></i> Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-twitter"></i> Twitter</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-instagram"></i> Instagram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-whatsapp"></i> Whatsapp</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-telegram"></i> Telegram</a></li>
                </ul>
            </div>

        </div>

        <div class="container-fluid row py-4">
            <div class="col d-flex justify-content-center custom-footer-item4">
                <p>Copyright © Ango Crystal Academy 2023. All Right Reserved.</p>
            </div>
        </div>

    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
