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
                                    <form action="{{ route('admin-borrow-update', $borrow->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="magazine_id">Pinjam Buku</label>
                                            <select name="magazine_id" class="form-control" >
                                                <option value="{{ $borrow->books->id }}">{{ $borrow->books->nama }}</option>
                                                @foreach ( $books as $book)
                                                    <option value="{{$book->id}}">
                                                        {{$book->nama}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="users_id">Peminjam</label>
                                            <select name="users_id" class="form-control">
                                                <option value="{{ $borrow->users->id }}">{{ $borrow->users->name }}</option>
                                                @foreach ( $users as $user)
                                                    <option value="{{$user->id}}">
                                                        {{$user->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_pinjam">tanggal pinjam</label>
                                            <input type="text" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" placeholder="masukkan tanggal_pinjam" value="{{ old('tanggal_pinjam', $borrow->tanggal_pinjam) }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_kembali">tanggal kembali</label>
                                            <input type="text" name="tanggal_kembali" id="tanggal_kembali" class="form-control" placeholder="masukkan tanggal_kembali" value="{{ old('tanggal_kembali', $borrow->tanggal_kembali) }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="status_pinjaman">Status pinjaman</label>
                                            <select name="status_pinjaman" required class="form-control">
                                                <option value="{{ $borrow->status_pinjaman }}">{{ $borrow->status_pinjaman }}</option>
                                                <option value="dikembalikan">Dikembalikan</option>
                                                <option value="terlambat">Terlambat</option>
                                                <option value="hilang">Hilang</option>
                                                <option value="dipinjam">Dipinjam</option>
                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="denda">denda</label>
                                            <input type="number" name="denda" id="denda" class="form-control" placeholder="masukkan denda" value="{{ old('denda', $borrow->denda) }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="cek">Cek </label>
                                            <select name="cek" required class="form-control" value="{{ old('cek', $borrow->cek) }}">
                                                <option value="{{ $borrow->cek }}">{{ $borrow->cek }}</option>
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

    <script>

        function previewImage() {
        const gambar = document.querySelector('#gambar')
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display ='block';

        const OfReader = new FileReader();
        OfReader.readAsDataURL(gambar.files[0]);

        OfReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    </script>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.addCss('.cke_editable p { margin: 0 !important; }');
       CKEDITOR.replace('keterangan',{
            removeButtons :'Image'
        });
    </script>

    <script src="{{ url('frontend/libraries/mc/mc-calendar.min.js') }}"></script>
    <script>

    let myDatePickerkb = MCDatepicker.create({
      el: '#datepicker',
      dateFormat: 'DD MMMM YYYY',
        bodyType: 'inline',
    })

    </script>
@endpush
