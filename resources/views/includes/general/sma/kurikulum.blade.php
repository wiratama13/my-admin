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
                        <h3 style="color: #088194;">Kurikulum SMA</h3>
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
                          <div class="paragraf" style="text-align: justify; color:#003366;">SMA Al Muslim adalah sekolah yang mampu memenuhi kebutuhan dan tantangan masyarakat dalam menghadapi kemajuan ilmu pengetahuan dan teknologi di era global. Oleh karena itu selain menggunakan kurikulum yang telah disiapkan oleh pemerintah, sekolah telah mengembangkan kurikulum khas yang mampu mengembangkan soft skill dan life skill yang dibutuhkan siswa di masa depan.</div>

                          <div class="paragraf" style="text-align: justify; color:#003366;">
                          <br> 1. Kurikulum 2013 mengembangkan keseimbangan antara sikap spiritual dan sosial, pengetahuan, dan keterampilan, serta menerapkannya dalam berbagai situasi di sekolah dan masyarakat. Kurikulum tersebut memeliki tujuan mempersiapkan manusia Indonesia agar memiliki kemampuan hidup sebagai pribadi dan warga negara yang beriman, produktif, kreatif, inovatif, dan afektif serta mampu berkontribusi pada kehidupan bermasyarakat, berbangsa, bernegara, dan peradaban dunia.
                          <br/>
                          <br> 2. Kurikulum Sekolah Penggerak Terpilihnya SMA Al Muslim sebagai sekolah penggerak menjadi tantangan bagi sekolah untuk menerapkan kurikulum sekolah penggerak yang bertujuan untuk mewujudkan Profil Pelajar Pancasila sebagai implementasi dari visi pendidikan nasional.
                          <br>
                          <br> 3. Kurikulum Pengembangan Sekolah Kurikulum yang bertujuan untuk  mewujudkan generasi pemimpin yang rahmatan lil alamin, generasi yang mampu memberikan manfaat bagi orang lain dan lingkungan sekitar. Kurikulum unggulan yang ada di SMA Al Muslim yaitu Islamic Program, Leadership, dan Green Education. Ketiga kurikulum tersebut menjadi ciri khas SMA Al Muslim.
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
