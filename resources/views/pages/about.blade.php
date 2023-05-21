@extends('layouts.app')

@section('content')
{{-- sub-header --}}
<div style="background-image: url('{{ asset('image/subheader.png')}}'); height: 150px;">
    <div class="sub-header-overlay d-flex align-items-center">
        <div class=" ms-4">
            <p class="sub-header-heading">About us</p>
            <p  class="sub-header-text"><a href="{{ route('home')}}" class="sub-header-link">Home</a> &rarr; About us</p>
        </div>
    </div>
</div>

<section id="about" class="container-fluid mt-5">
    {{-- First row --}}

    {{-- view in large devices --}}
    <div class="row d-md-none d-sm-none d-none d-lg-flex d-xl-flex ms-2 me-2">
        <div class="col-xl-6 col-lg-6 mx-auto" data-aos="slide-right" data-aos-duration="1000" data-aos-delay="500">

            <img src="{{ asset('image/about-us.png')}}" alt="" class="mx-auto img-fluid about-image">

        </div>

        <div class="col-xl-6 col-lg-6 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x" class="img-fluid">
                <p class="sub-heading">Our Mission</p>
            </div>
            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur numquam, magnam facilis maxime quos aliquam ab sed sunt. Mollitia fugiat nostrum vitae ut? Odio commodi expedita harum tempora, possimus aliquam?
                Quos accusamus facere veniam magni unde reiciendis quas officia maiores error saepe aspernatur, molestiae nam quaerat eligendi accusantium, odit omnis fuga animi suscipit architecto. Totam perspiciatis reiciendis modi quibusdam a!
                Minima laudantium laboriosam accusantium id sequi quia inventore aliquam aperiam tempora nisi adipisci consequatur, reiciendis vero ea eaque dolorum quae. Sed illum dolorum praesentium voluptatem voluptates culpa fugit sequi nisi!
                At sequi labore, ipsa mollitia quod eveniet nobis qui officia modi molestias provident ducimus, vero tenetur praesentium, asperiores quae voluptate voluptatum corporis ab ex illo sed. Inventore porro maxime recusandae?
                Quas asperiores fugit fuga officia quae, sed delectus suscipit! Obcaecati quae tempore sint. Ipsa accusantium commodi, eos beatae dicta ipsum sapiente iusto excepturi. Deleniti distinctio ut placeat vero. Eius, nihil.
            </p>


        </div>
    </div>

    {{-- view in small devices --}}
    <div class="row d-xl-none d-lg-none d-md-block d-sm-block d-xs-block ms-2 me-2">

        <div class="col-md-12 col-sm-12 col-xs-12 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">Our Mission</p>
            </div>
            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur numquam, magnam facilis maxime quos aliquam ab sed sunt. Mollitia fugiat nostrum vitae ut? Odio commodi expedita harum tempora, possimus aliquam?
                Quos accusamus facere veniam magni unde reiciendis quas officia maiores error saepe aspernatur, molestiae nam quaerat eligendi accusantium, odit omnis fuga animi suscipit architecto. Totam perspiciatis reiciendis modi quibusdam a!
                Minima laudantium laboriosam accusantium id sequi quia inventore aliquam aperiam tempora nisi adipisci consequatur, reiciendis vero ea eaque dolorum quae. Sed illum dolorum praesentium voluptatem voluptates culpa fugit sequi nisi!
                At sequi labore, ipsa mollitia quod eveniet nobis qui officia modi molestias provident ducimus, vero tenetur praesentium, asperiores quae voluptate voluptatum corporis ab ex illo sed. Inventore porro maxime recusandae?
                Quas asperiores fugit fuga officia quae, sed delectus suscipit! Obcaecati quae tempore sint. Ipsa accusantium commodi, eos beatae dicta ipsum sapiente iusto excepturi. Deleniti distinctio ut placeat vero. Eius, nihil.
            </p>


        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 mx-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <img src="{{ asset('image/about-us.png')}}" alt="" class="mx-auto d-flex img-fluid about-image">
        </div>

    </div>

    {{-- second row --}}

    {{-- view in large devices --}}
    <div class="row mt-5 d-xl-flex d-lg-flex d-md-none d-sm-none d-none ms-2 me-2">
        <div class="col-xl-6 col-lg-6 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">About Us</p>
            </div>
            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                We are determined to nurture leaders who are complete in spirit, mind and body through the application of accredited curriculum and assessment tools in a prepared environment, holistic in approach to unleash in the children their natural curiosity for self-discovery and development.
            </p>

        </div>

        <div class="col-xl-6 col-lg-6 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">Our Vision</p>
            </div>
            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                Every child is inspired to learn, guided to self-discovery, equiped to excel and empowered to thrive in life-long learning in a dynamic world.
            </p>
        </div>
    </div>

    {{-- view in small devices --}}
    <div class="row mt-5 d-md-block d-sm-block d-xs-block d-xl-none d-lg-none ms-2 me-2">
        <div class="col-md-12 col-sm-12 col-xs-12 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">About Us</p>
            </div>
            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                We are determined to nurture leaders who are complete in spirit, mind and body through the application of accredited curriculum and assessment tools in a prepared environment, holistic in approach to unleash in the children their natural curiosity for self-discovery and development.
            </p>

        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">Our Vision</p>
            </div>
            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                Every child is inspired to learn, guided to self-discovery, equiped to excel and empowered to thrive in life-long learning in a dynamic world.
            </p>
        </div>
    </div>
</section>
@endsection
