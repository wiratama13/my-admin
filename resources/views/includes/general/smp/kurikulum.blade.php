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
                        <h3 style="color: #0099FF">Kurikulum SMP</h3>
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
                          <div class="paragraf" style="text-align: justify; color:#003366;"><b>A. National Curriculum (K-13)</b></div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 20px;">Kurikulum ini diimplementasikan kepada siswa kelas VIII dan kelas IX  dengan mengacu pada juknis kurikulum nasional terbaru (K-13 Edisi Revisi Tahun 2017)</div>
                          <p></p>
                          <div class="paragraf" style="text-align: justify; color:#003366;"><b>B. Sekolah Penggerak Curriculum</b></div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 20px;">Kurikulum yang mulai diterapkan untuk siswa kelas VII tahun ajaran 2021/2022 sebagai implementasi pelaksanaan Program Sekolah Penggerak. Untuk menjadikannya bermakna, kurikulum ini dikembangkan sesuai dengan konteks dan kebutuhan peserta didik dan satuan pendidikan.</div>
                          <p></p>
                          <div class="paragraf" style="text-align: justify; color:#003366;"><b>C. Development Curriculum</b></div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 20px;">Leadership, Green Education, and Arabic Language</div>
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
