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
 <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <h3 style="color: #F39019;">Kurikulum TK</h3>
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
                          <div class="paragraf" style="text-align: justify; color:#003366;"><b>A. Kurikulum KTSP dan Sekolah Penggerak</b></div>
                          <div class="paragraf" style="text-align: justify; color:#003366;">Kurikulum TK Al Muslim menggunakan KTSP atau kurikulum 2013 mencakup bidang pengembangan nilai agama dan moral, bahasa, fisik motorik, kognitif, dan sosial emosional. Kurikulum TK Al Muslim dikembangkan sebagai perwujudan dari kurikulum pendidikan anak usia dini serta tuntutan pengembangan TK Al Muslim dalam menghadapai persaingan kemampuan lulusan dan kemajuan Ilmu Pengetahuan dan Teknologi agar lulusan TK Al Muslim mampu bersaing secara global dalam bermasyarakat dan bernegara. Terpilihnya TK Al Muslim sebagai sekolah penggerak menjadi tantangan bagi sekolah untuk menerapakan kurikulum sekolah penggerak yang bertujuan untuk meuwujdkan Profil Pelajar Pancasila sebagai implementasi dari visi pendidikan nasional.</div>
                          <p></p>
                         <div class="paragraf" style="text-align: justify; color:#003366;">Layanan pendidikan di TK Al Muslim menggunakan prinsip yang digunakan dalam proses pembelajaran anak usia dini sebagai berikut:</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 15px;">a.) Belajar melalui bermain</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 15px;">b.) Berorientasi pada perkembangan anak</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 15px;">c.) Berorientasi pada kebutuhan anak</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 15px;">d.) Berpusat pada anak</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 15px;">e.) Pembelajaran aktif</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 15px;">f.) Berorientasi pada pengembangan nilai-nilai karakter</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 15px;">g.) Berorientas pada pengembangan kecakapan hidup</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 15px;">h.) Didukung oleh lingkungan yang kondusif</div>
                          <div class="paragraf" style="text-align: justify; color:#003366; margin-left: 15px;">i.) Pemanfaatan media belajar, sumber belajar, dan narasumber yang ada di lingkungan TK Al Muslim</div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Lowongan Pekerjaan End -->


    <!-- Lowongan Pekerjaan Start -->
    <section class="services-area section-padding-100-0">
        <div class="container">
             <div class="row">
                <div class="col-12 col-sm-80">
                    <div class="single-team-member-area mb-100">
                          <div class="paragraf" style="text-align: justify; color:#003366;"><b>B. Kurikulum Pengembangan Sekolah (<i>Leadership</i> dan <i>Green Education</i>)</b></div>
                          <div class="paragraf" style="text-align: justify; color:#003366;">Kurikulum khas TK Al Muslim mengedepankan pendidikan karakter dalam program pendidikannya. Untuk menunjang program tersebut, maka telah dikembangkan kurikulum yang dapat menumbuh kembangkan karakter positif, yaitu dengan menambahkan mata pelajaran Green Education (GE) dan Leadership.</div>
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
