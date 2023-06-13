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
                <div class="col-12 col-sm-80">
                    <div class="single-team-member-area mb-100">
                          <div class="paragraf" style="text-align: justify; color:#003366;">
                            <br/><b>1.	LDKS (Latihan Dasar Kepemimpinan Siswa)</b>
                            <br/><b>2.	Leadership Project  </b>
                            <br/><b>3.	MPLS     </b>
                            <br/><b>4.	Achievement Motivation Training (AMT) </b>
                            <br/><b>5.	Class Meeting  </b>
                            <br/><b>6.	Holiday Program </b>
                            <br/><b>7.	 English Camp  </b>
                            <br/><b>8.	Tahfidz Camp  </b>
                            <br/><b>9.	 Inspiring Class  </b>
                            <br/><b>10. Parenting Class</b>
     
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
