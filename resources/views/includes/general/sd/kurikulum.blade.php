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
 <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <h3 style="color: #006600;">Kurikulum SD</h3>
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
                          <div class="paragraf" style="text-align: justify; color:#003366;">Kurikulum Sekolah Dasar Al Muslim dikembangkan sebagai perwujudan dari kurikulum pendidikan dasar dan merupakan tuntutan pengembangan sekolah Al Muslim dalam menghadapi persaingan lulusan Sekolah Dasar, sehingga diharapkan mampu bersaing dalam menghadapi kemajuan ilmu pengetahuan dan teknologi secara global dalam bermasyarakat dan bernegara.</div>
                          <br/>
                          <div class="paragraf" style="text-align: justify; color:#003366;">Kurikulum SD Al Muslim mampu mengembangan potensi peserta didik melalui kegiatan yang menarik dan menyenangkan (<i>joyfull learning</i>) untuk menggali inisiatif, kreativitas dan semangat berkarya peserta didik dengan memanfaatkan teknologi dan informasi.</div>
                          <p></p>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 10px;">a.) <b>Kurikulum 2013</b></div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 30px;">merupakan penerapan nilai-nilai luhur, kesopan-santunan, rasa kasih sayang terhadap sesama dan rasa hormat terhadap orang tua atau guru mulai memudar. Untuk itu pendidikan karakter di implementasi dalam kurikulum 2013.</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 10px;">b.) <b>Kurikulum Operasional </b></div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 30px;">Satuan Pendidikan SD Al Muslim terpilih sebagai sekolah penggerak menjadi sebuah tantangan baru, untuk menerapkan kurikulum Operasional Satuan Pendidikan (KOSP) yang bertujuan untuk mewujudkan Profil Pelajar Pancasila.</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 10px;">c.) <b>Kurikulum Pengembangan Sekolah </b></div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 30px;">Pendidikan sebagai suatu proses yang disengaja dan berkesinambungan dalam mengembangkan fitrah dan fungsi manusia, akan memberikan hasil yang maksimal bila menggunakan paradigma yang menekankan pada <i>"how to learn"</i> melihat pembelajaran sebagai suatu proses belajar yang saling terkait secara utuh. Leadership merupakan salah satu mata pelajaran unggulan yang dikembangkan oleh sekolah sebagai bagian untuk mewujudkan visi dan misi lembaga yaitu mengembangkan potensi siswa sebagai khalifatullah fil ardh. Green education mencoba untuk mengajarkan pada siswa agar mereka mampu berpikir secara sistematis dan menyeluruh terhadap suatu proses dengan memanfaatkan alam dan lingkungan sebagai media dan sumber belajar.</div>
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
