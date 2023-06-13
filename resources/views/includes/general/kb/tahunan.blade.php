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
                        <h3 style="color: #CC0066;">Program Tahunan KB</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Program tahunan Start -->
    <section class="services-area section-padding-100-0">
        <div class="container">
             <div class="row">
                <div class="col-12 col-sm-80">
                    <div class="single-team-member-area mb-100">
                          <div class="paragraf" style="text-align: justify; color:#003366;">
                            <br/><b>1.	Sholat Dhuha dan Jumat</b>
                            <br/><b>2.	Outbond     </b>
                            <br/><b>3.	Upacara Bendera    </b>
                            <br/><b>4.	Peringatan Hari Besar Agama  </b>
                            <br/><b>5.	Peringatan Hari Besar Nasional    </b>
                            <br/><b>6.	Family Day/Pesta Olah Raga Keluarga  </b>
                            <br/><b>7.	Pentas Seni dan Pelepasan </b>
                            <br/><b>8.	Tadabur Alam  </b>
                            <br/><b>9.	Peduli Anak Yatim dan Dhuafa    </b>
                            <br/><b>10. Safari Sosial ke Panti Asuhan Anak Yatim  </b>
                            <br/><b>11. Camping Kids  </b>
                            <br/><b>12. Kegiatan GE outdoor dan indoor    </b>
                            <br/><b>13. Kegiatan leadership outdoor dan indoor</b>
                            <br/><b>14. Pondok Ramdan dan Berbagi Tajil</b>
                            <br/><b>15. Manasik Haji       </b>
                            <br/><b>16. Studi Lapangan</b>
                            <br/><b>17. Bina Kreativitas   </b>
                            <br/><b>18. Kelas inspirasi</b>
                          </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Program tahunan End -->


    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="/images/program-thn-kb1.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="/images/program-thn-kb2.jpg">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="/images/program-thn-kb3.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="/images/program-thn-kb4.jpg" alt="">
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="/images/program-thn-kb5.jpg">
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="/images/program-thn-kb6.jpg">
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="/images/program-thn-kb7.jpg">
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="/images/program-thn-kb8.jpg">
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
