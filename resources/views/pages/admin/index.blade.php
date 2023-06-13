@extends('layouts.admin')

@section('content')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('includes.admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('includes.admin.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row d-flex justify-content-center">

                        <!-- Earnings (Monthly) Card Example -->
                       
                        

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{ route('admin-book') }}">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Jumlah Buku</div>
                                            </a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $books }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{ route('admin-borrow') }}">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Jumlah peminjam</div>
                                            </a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $borrows }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                       
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('includes.admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->


</body>
@endsection
