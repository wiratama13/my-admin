@extends('layouts.jenjang')

@section('title','KB AL MUSLIM JAWA TIMUR')
@section('content')
<body>

    <!-- Header Area Start -->
    <header class="header-area">

        <!-- Navbar Area -->
    @include('includes.general.navbar-kb')
    </header>
    <!-- Header End -->

    <!-- KB Al Muslim Start -->
    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <h3 style="color: #CC0066;">Kegiatan Keseharian KB</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Lowongan Pekerjaan Start -->
    <section class="services-area section-padding-100-0">
        <div class="container">
             <div class="row">
                <div class="col-12 col-sm-80">
                    <div class="single-team-member-area mb-100">
                          <div class="paragraf" style="text-align: justify; color:#003366;">
                            <br/><b>1.	Berbaris dan ikrar      </b>
                            <br/><b>2.	Kegiatan pengembangan motorik kasar </b>
                            <br/><b>3.	Kegiatan pengembangan kemampuan dasar  </b>
                            <br/><b>4.	Istirahat dan bermain     </b>
                            <br/><b>5.	Mengaji </b>
                            <br/><b>6.	Sholat berjamaah dan kultum  </b>
                            <br/><b>7.	Pembiasaan cuci tangan, menggosok gigi, dan Toilet training  </b>
                            <br/><b>8.	Makan siang bersama dan mencuci alat makan </b>
                            <br/><b>9.	Mendengarkan cerita, relaksasi, dan tidur siang. </b>
                            <br/><b>10. Recalling   </b>
                          </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Lowongan Pekerjaan End -->


           <!-- Facility Start -->
    <section class="elements-area section-padding-100-0">
        <div class="container">

             <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/keseharian-tk1.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/keseharian-tk2.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/keseharian-tk3.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/keseharian-tk4.jpg"></div>
                    </div>
                </div>

            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



       <p style="margin-top: 50px;"></p>
</body>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/css/csskbalmuslim.css') }}">
@endpush
