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

    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <h3 style="color: #0099FF;">Fasilitas SMP</h3>
                    </div>
                </div>
            </div>

           <p style="margin-top: 25px;"></p>


           <!-- Fasilitas Start -->
    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100" data-wow-delay="300ms">
                        <h6 style="color: #003366">1.) Ruang Kelas</h6>
                        <h6 style="color: #003366">2.) Ruang Rapat</h6>
                        <h6 style="color: #003366">3.) Gazebo</h6>
                        <h6 style="color: #003366">4.) Hall</h6>
                        <h6 style="color: #003366">5.) Laboratorium Biologi</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100" data-wow-delay="300ms">
                        <h6 style="color: #003366">6.) Kantin</h6>
                        <h6 style="color: #003366">7.) Ruang Makan</h6>
                        <h6 style="color: #003366">8.) Lapangan</h6>
                        <h6 style="color: #003366">9.) Ruang Musik</h6>
                        <h6 style="color: #003366">10.) Laboratorium Fisika</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100" data-wow-delay="300ms">
                        <h6 style="color: #003366">11.) Ruang Konsultasi</h6>
                        <h6 style="color: #003366">12.) Ruang UKS</h6>
                        <h6 style="color: #003366">13.) Kantor</h6>
                        <h6 style="color: #003366">14.) Ruang Karawitan</h6>
                        <h6 style="color: #003366">15.) Perpustakaan</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100" data-wow-delay="300ms">
                        <h6 style="color: #003366">16.) Kolam Renang</h6>
                        <h6 style="color: #003366">17.) Lapangan basket</h6>
                        <h6 style="color: #003366">18.) Lapangan Volli</h6>
                        <h6 style="color: #003366">19.) Laboratorium komputer</h6>
                        <h6 style="color: #003366">20.) Greenhouse</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Fasilitas End-->

        <p style="margin-top: 50px;"></p>


            <div class="row">

                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/fasilitas/gedung-smp.jpg">
                        <p></p>
                        <center><h6>Gedung SMP</h6></center>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/fasilitas/gazebo-smp.jpg">
                        <p></p>
                        <center><h6>Gazebo</h6></center>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/fasilitas/greebhouse-smp.jpg">
                        <p></p>
                        <center><h6>Green House</h6></center>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service-area d-flex mb-100">
                        <div class="img"><img src="/images/fasilitas/lab-biologi-smp.jpg">
                        <p></p>
                        <center><h6>Lab. Biologi</h6></center>
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
    <link rel="stylesheet" href="{{ url('frontend/css/csssmpalmuslim.css') }}">
@endpush
