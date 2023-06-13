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
                        <h3 style="color: #006600;">Kegiatan Keseharian SD</h3>
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
                            <br/><b>1.	Doa pagi/Ikrar  </b>
                            <br/><b>2.	Fresh Morning  </b>
                            <br/><b>3.	Murojaah surat pendek dan doa sehari-hari</b>
                            <br/><b>4.	Salat Duha   </b>
                            <br/><b>5.	Pembelajaran</b>
                            <br/><b>6.	Mengaji   </b>
                            <br/><b>7.	Salat dhuhur </b>

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
