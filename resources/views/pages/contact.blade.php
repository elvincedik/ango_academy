@extends('layouts.app')

@section('content')
{{-- sub-header --}}
<div style="background-image: url('{{ asset('image/subheader.png')}}'); height: 150px;">
    <div class="sub-header-overlay d-flex align-items-center">
        <div class=" ms-4">
            <p class="sub-header-heading">Contact us</p>
            <p  class="sub-header-text"><a href="{{ route('home')}}" class="sub-header-link">Home</a> &rarr; Contact us</p>
        </div>
    </div>
</div>

<div class="mt-5 mx-5" style="background-image: url('{{ asset('image/Frame 86.png')}}');">
    {{-- first column --}}
    <div class="row pt-3 mx-4 ms-5">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">

            <p style="color: white; font-size: 30px;">&bull; CONTACT INFO &bull;</p>

            <div class="row">
                <div class="col-11">

                            {{-- call --}}
                    {{-- <a href="" class="email-call-address btn w-100"><div class="row contact-divs mb-4 p-5">
                        <div class="col-3">
                            <img src="{{ asset('image/call-icon.png')}}" alt="" class="img-fluid" width="80px" height="80px">
                        </div>
                        <div class="col-9">
                            <h6>Call us directly on </h6>
                            <p>+234 9021063261</p>
                        </div>
                    </div></a> --}}

                    <a href="tel:+234 9021063261" class="btn btn-light w-100 email-call-address contact-divs py-4 mb-3">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{ asset('image/call-icon.png')}}" alt="" class="img-fluid" width="100px">
                            </div>
                            <div class="col-7 d-flex align-items-center">

                                <p class="text-start" style="font-size: 17px;"><b>Call us directly on</b><br>+234 9021063261</p>
                            </div>
                        </div>
                    </a>

                    {{-- mail --}}
                    {{-- <div class="row contact-divs mb-4 p-5">
                        <div class="col-3">
                            <img src="{{ asset('image/mail-icon.png')}}" alt="" class="img-fluid" width="80px" height="80px">
                        </div>
                        <div class="col-9">
                            <h6>Mail us directly on</h6>
                            <p>Angoacad@gmail.com</p>
                        </div>
                    </div> --}}
                    <a href="mailto:Angocrystal@gmail.com" class="btn btn-light w-100 email-call-address py-4 mb-3">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{ asset('image/mail-icon.png')}}" alt="" class="img-fluid" width="100px">
                            </div>
                            <div class="col-7 d-flex align-items-center">

                                <p class="text-start"><b>Mail us directly on</b><br><span style="font-size: 13px;">Angoacad@gmail.com</span></p>
                            </div>
                        </div>
                    </a>

                    {{-- address --}}
                    {{-- <div class="row contact-divs mb-4 py-4 px-5">
                        <div class="col-3">
                            <img src="{{ asset('image/location-icon.png')}}" alt="" class="img-fluid" width="80px" height="80px">
                        </div>
                        <div class="col-6 ">
                            <h6>Find us </h6>
                            <p>23 Victor Anene Bossua Street, GRA, Asaba, Delta State.</p>
                        </div>
                    </div> --}}
                    <a href="https://www.google.com.ng/maps/place/Ango+Crystal+Academy/@6.2252761,6.6910213,15.25z/data=!4m6!3m5!1s0x1043f3f5fadb6087:0x42449ffc4eff1cda!8m2!3d6.2282371!4d6.6906067!16s%2Fg%2F11rzws43ps?hl=en" target="_blank" class="btn btn-light w-100 email-call-address contact-divs py-4 mb-3">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{ asset('image/location-icon.png')}}" alt="" class="img-fluid" width="100px">
                            </div>
                            <div class="col-7 d-flex align-items-center">

                                <p class="text-start" style="font-size: 17px;"><b>Find us</b><br>23 Victor Anene Bossua Street, GRA, Asaba, Delta State.</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </div>

        {{-- second column --}}
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <p style="color: white; font-size: 30px;">&bull; GET IN TOUCH &bull;</p>
            <form action="">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name" name="name" style="height: 70px;">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" style="height: 70px;">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Subject" name="subject" style="height: 70px;">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="7" style="color: rgb(73, 73, 73)" placeholder="Message here..."></textarea>
                </div>
                <div class="d-flex justify-content-end mb-5">
                    <a href="" class="btn form-btn">Send message</a>
                </div>
            </form>
        </div>
    </div>

    {{-- google map --}}

</div>
<div class="row mt-5 mx-4">
    <div class="col-12">
        <img src="{{ asset('image/google-map-image.PNG')}}" alt="" class="img-fluid w-100">
    </div>
</div>
@endsection
