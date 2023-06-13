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

                        @if ($errors->any())
                        <div class="alert alert-danger mt-2 col-6">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                        @endif
                    <!-- Content Row -->
                   <div class="row">
                        <div class="col">
                            <div class="card-shadow">
                                <div class="card-body">
                                    <form action="{{ route('admin-borrow-store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="magazine_id">Pinjam Buku</label>
                                            <select name="magazine_id" required class="form-control" >
                                                <option value="">Pilih Buku </option>
                                                @foreach ( $books as $book)
                                                    <option value="{{$book->id}}">
                                                        {{$book->nama}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="users_id">Peminjam</label>
                                            <select name="users_id" required class="form-control">
                                                <option value="">Pilih Peminjam </option>
                                                @foreach ( $users as $user)
                                                    <option value="{{$user->id}}">
                                                        {{$user->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_pinjam">tanggal pinjam</label>
                                            <input type="text" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" placeholder="masukkan tanggal_pinjam" value="{{ old('tanggal_pinjam') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_kembali">tanggal kembali</label>
                                            <input type="text" name="tanggal_kembali" id="tanggal_kembali" class="form-control" placeholder="masukkan tanggal_kembali" value="{{ old('tanggal_kembali') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="status_pinjaman">Status pinjaman</label>
                                            <select name="status_pinjaman" required class="form-control" value="{{ old('status_pinjaman') }}">
                                              
                                                <option value="dikembalikan">Dikembalikan</option>
                                                <option value="terlambat">Terlambat</option>
                                                <option value="hilang">Hilang</option>
                                                <option value="dipinjam" selected>Dipinjam</option>
                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="denda">denda</label>
                                            <input type="number" name="denda" id="denda" class="form-control" placeholder="masukkan denda" value="{{ old('denda') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="cek">Cek </label>
                                            <select name="cek" required class="form-control" value="{{ old('cek') }}">
                                                <option value="selesai">Selesai</option>
                                                <option value="belum_selesai">Belum selesai</option>
                                            </select>
                                        </div>
                                       

                                        <button type="submit" class="btn btn-block btn-primary">
                                            Simpan
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>


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

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/mc/mc-calendar.min.css') }}">
@endpush

@push('prepend-script')
    <script src="{{ url('frontend/libraries/mc/mc-calendar.min.js') }}"></script>
    <script>

    let Datepicker = MCDatepicker.create({
      el: '#tanggal_pinjam',
      dateFormat: 'YYYY-mm-dd',
      bodyType: 'inline',
    })

    let Datepicker2 = MCDatepicker.create({
      el: '#tanggal_kembali',
      dateFormat: 'YYYY-mm-dd',
      bodyType: 'inline',
    })

    </script>

@endpush

