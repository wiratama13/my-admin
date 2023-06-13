@extends('layouts.jenjang')

@section('title','SD AL MUSLIM JAWA TIMUR')
@section('content')
<body>

    <!-- Header Area Start -->
    <header class="header-area">

        <!-- Navbar Area -->
    @include('includes.general.navbar-sd')
    </header>
    <!-- Header End -->

    <!-- SD Al Muslim Start -->

       <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <h3 style="color: #006600;">Program Tahunan</h3>
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
                            <br/><b>1.	MPLS</b>
                            <br/><b>2.	LDKM </b>
                            <br/><b>3.	Studi Lapangan</b>
                            <br/><b>4.	LDKS   </b>
                            <br/><b>5.	Pondok Ramadan</b>
                            <br/><b>6.	Berbagi Takjil</b>
                            <br/><b>7.	Bakti Sosial </b>
                            <br/><b>8.	Class Meeting  </b>
                            <br/><b>9.	Kids Entrepreneur day </b>
                            <br/><b>10. Tokoh dan Profesi   </b>
                            <br/><b>11. Student Appresiation  </b>
                            <br/><b>12. Field Trip   </b>
                            <br/><b>13. Kerjasama AISEC  </b>
                            <br/><b>14. Holiday Program  </b>
                            <br/><b>15. Super Camp  </b>
                            <br/><b>16. Tahfidz Holiday Program  </b>
                            <br/><b>17. Outbond     </b>
                            <br/><b>18. Fun Family Outbond  </b>
                            <br/><b>19. Peringatan Hari Lingkungan </b>
                            <br/><b>20. Peringatan Hari Besar Islam     </b>
                            <br/><b>21. Dialog Interaktif   </b>
                            <br/><b>22. Mendongeng</b>
                            <br/><b>23. Literasi Sejak Dini </b>
                            <br/><b>24. Safari Sosial  </b>
                            <br/><b>25. Pojok Makanan Sehat  </b>

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
                        <div class="img"><img src="/images/program-tahun-sd1.jpg">
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/program-tahun-sd2.jpg">
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/program-tahun-sd3.jpg">
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/program-tahun-sd4.jpg">
                        </div>
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
    <link rel="stylesheet" href="{{ url('frontend/css/csssdalmuslim.css') }}">
@endpush
