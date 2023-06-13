@extends('layouts.jenjang')

@section('title','SMA AL MUSLIM JAWA TIMUR')
@section('content')
<body>

    <!-- Header Area Start -->
    <header class="header-area">

        <!-- Navbar Area -->
    @include('includes.general.navbar-sma')
    </header>
    <!-- Header End -->

  <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <h3 style="color: #088194;">Program Tahunan</h3>
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
                            <br/><b>1.	MPLS </b>
                            <br/><b>2.	Matrikulasi   </b>
                            <br/><b>3.	Visit to Campuss  </b>
                            <br/><b>4.	LDKS</b>
                            <br/><b>5.	Pondok Ramadan </b>
                            <br/><b>6.	Berbagi takjil   </b>
                            <br/><b>7.	Bakti Sosial </b>
                            <br/><b>8.	Studi lapangan</b>
                            <br/><b>9.	Social Mission  </b>
                            <br/><b>10. Entrepreneur day   </b>
                            <br/><b>11. Campus Expo  </b>
                            <br/><b>12. AMC    </b>
                            <br/><b>13. Field Trip </b>
                            <br/><b>14. Kerjasama AISEC  </b>
                            <br/><b>15. Al Muslim Campuss Community (ACC) </b>
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
    <link rel="stylesheet" href="{{ url('frontend/css/csssmaalmuslim.css') }}">
@endpush
