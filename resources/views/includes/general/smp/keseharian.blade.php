@extends('layouts.jenjang')

@section('title','SMP AL MUSLIM JAWA TIMUR')
@section('content')
<body>

    <!-- Header Area Start -->
    <header class="header-area">

        <!-- Navbar Area -->
    @include('includes.general.navbar-smp')
    </header>
    <!-- Header End -->
    <!-- SMP Al Muslim Start -->
      <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <h3 style="color: #0099FF;">Kegiatan Keseharian SMP</h3>
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
                            <br/><b>1. Worship </b>
                            <br/><b>2. Quran Lesson </b>
                            <br/><b>3. Fresh Morning </b>
                            <br/><b>4. Habituation    </b>
                            <br/><b>5. Academic's Activity </b>
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
    <link rel="stylesheet" href="{{ url('frontend/css/csssmpalmuslim.css') }}">
@endpush
