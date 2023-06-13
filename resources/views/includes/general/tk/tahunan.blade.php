@extends('layouts.jenjang')

@section('title','TK AL MUSLIM JAWA TIMUR')
@section('content')
<body>

    <!-- Header Area Start -->
    <header class="header-area">

        <!-- Navbar Area -->
    @include('includes.general.navbar-tk')
    </header>
    <!-- Header End -->

    <!-- TK Al Muslim Start -->

     <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <h3 style="color: #F39019;">Program Tahunan TK</h3>
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
                            <br/><b>1.	Sholat Dhuha dan Jumat </b>
                            <br/><b>2.	Outbond  </b>
                            <br/><b>3.	Upacara Bendera     </b>
                            <br/><b>4.	Peringatan Hari Besar Agama </b>
                            <br/><b>5.	Peringatan Hari Besar Nasional  </b>
                            <br/><b>6.	Family Day/Pesta Olah Raga Keluarga </b>
                            <br/><b>7.	Pentas Seni dan Pelepasan  </b>
                            <br/><b>8.	Tadabur Alam   </b>
                            <br/><b>9.	Peduli Anak Yatim dan Dhuafa  </b>
                            <br/><b>10. Safari Sosial ke Panti Asuhan Anak Yatim</b>
                            <br/><b>11. Camping Kids    </b>
                            <br/><b>12. Kegiatan GE outdoor dan indoor   </b>
                            <br/><b>13. Kegiatan leadership outdoor dan indoor</b>
                            <br/><b>14. Pondok Ramdan dan Berbagi Tajil</b>
                            <br/><b>15. Manasik Haji </b>
                            <br/><b>16. Studi Lapangan  </b>
                            <br/><b>17. Bina Kreativitas  </b>
                            <br/><b>18. Kelas inspirasi    </b>
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
                        <div class="img"><img src="images/program-tahunan-tk1.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="images/program-tahunan-tk2.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="images/program-tahunan-tk3.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="images/program-tahunan-tk4.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="images/program-tahunan-tk5.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="images/program-tahunan-tk6.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="images/program-tahunan-tk7.jpg"></div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="images/program-tahunan-tk8.jpg"></div>
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
    <link rel="stylesheet" href="{{ url('frontend/css/csstkalmuslim.css') }}">
@endpush
