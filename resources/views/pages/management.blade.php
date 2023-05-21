@extends('layouts.app')

@section('content')
{{-- sub-header --}}
<div style="background-image: url('{{ asset('image/subheader.png')}}'); height: 150px;">
    <div class="sub-header-overlay d-flex align-items-center">
        <div class=" ms-4">
            <p class="sub-header-heading">Management</p>
            <p  class="sub-header-text"><a href="{{ route('home')}}" class="sub-header-link">Home</a> &rarr; Management</p>
        </div>
    </div>
</div>
{{-- content --}}
<div class="container-fluid mt-5">

    {{-- view in large devices --}}
    <div class="row ms-2 me-2 d-md-none d-sm-none d-none d-xl-flex d-lg-flex">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-background">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px">
                <p class="sub-heading">The Founder</p>
            </div>
            <p class="text pt-4" style="color: #5C5BA3;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">&bull; MRS ANGELA OJEI &bull;</p>

            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur numquam, magnam facilis maxime quos aliquam ab sed sunt. Mollitia fugiat nostrum vitae ut? Odio commodi expedita harum tempora, possimus aliquam?
                Quos accusamus facere veniam magni unde reiciendis quas officia maiores error saepe aspernatur, molestiae nam quaerat eligendi accusantium, odit omnis fuga animi suscipit architecto. Totam perspiciatis reiciendis modi quibusdam a!
                Minima laudantium laboriosam accusantium id sequi quia inventore aliquam aperiam tempora nisi adipisci consequatur, reiciendis vero ea eaque dolorum quae. Sed illum dolorum praesentium voluptatem voluptates culpa fugit sequi nisi!
                At sequi labore, ipsa mollitia quod eveniet nobis qui officia modi molestias provident ducimus, vero tenetur praesentium, asperiores quae voluptate voluptatum corporis ab ex illo sed. Inventore porro maxime recusandae?
                Quas asperiores fugit fuga officia quae, sed delectus suscipit! Obcaecati quae tempore sint. Ipsa accusantium commodi, eos beatae dicta ipsum sapiente iusto excepturi. Deleniti distinctio ut placeat vero. Eius, nihil.
                Necessitatibus quaerat deleniti recusandae velit! Maiores voluptatum a laboriosam eos quisquam ipsa autem molestiae soluta, rerum inventore ipsum omnis voluptatibus provident pariatur maxime veritatis quo nam quasi molestias asperiores recusandae?
            </p>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex">
            <img src="{{ asset('image/founder.png')}}" alt="" class="img-fluid mx-auto founder-pics" height="" width="" data-aos="slide-left" data-aos-duration="1000" data-aos-delay="300">
        </div>
    </div>

    {{-- view in small devices --}}
    <div class="row ms-2 me-2 d-xl-none d-lg-none d-xs-block d-sm-block d-md-block">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-background">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px">
                <p class="sub-heading">The Founder</p>
            </div>
            <p class="text pt-4" style="color: #5C5BA3;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">&bull; MRS ANGELA OJEI &bull;</p>

            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur numquam, magnam facilis maxime quos aliquam ab sed sunt. Mollitia fugiat nostrum vitae ut? Odio commodi expedita harum tempora, possimus aliquam?
                Quos accusamus facere veniam magni unde reiciendis quas officia maiores error saepe aspernatur, molestiae nam quaerat eligendi accusantium, odit omnis fuga animi suscipit architecto. Totam perspiciatis reiciendis modi quibusdam a!
                Minima laudantium laboriosam accusantium id sequi quia inventore aliquam aperiam tempora nisi adipisci consequatur, reiciendis vero ea eaque dolorum quae. Sed illum dolorum praesentium voluptatem voluptates culpa fugit sequi nisi!
                At sequi labore, ipsa mollitia quod eveniet nobis qui officia modi molestias provident ducimus, vero tenetur praesentium, asperiores quae voluptate voluptatum corporis ab ex illo sed. Inventore porro maxime recusandae?
                Quas asperiores fugit fuga officia quae, sed delectus suscipit! Obcaecati quae tempore sint. Ipsa accusantium commodi, eos beatae dicta ipsum sapiente iusto excepturi. Deleniti distinctio ut placeat vero. Eius, nihil.
                Necessitatibus quaerat deleniti recusandae velit! Maiores voluptatum a laboriosam eos quisquam ipsa autem molestiae soluta, rerum inventore ipsum omnis voluptatibus provident pariatur maxime veritatis quo nam quasi molestias asperiores recusandae?
            </p>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex">
            <img src="{{ asset('image/founder.png')}}" alt="" class="img-fluid mx-auto founder-pics" height="" width="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        </div>
    </div>

</div>
@endsection
