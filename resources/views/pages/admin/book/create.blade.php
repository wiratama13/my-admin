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
                                    <form action="{{ route('admin-book-store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="nama">Judul Buku</label>
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="masukkan nama" value="{{ old('nama') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_buat">Tanggal buat</label>
                                            <input type="text" name="tanggal_buat" id="datepicker" class="form-control" placeholder="masukkan tanggal" value="{{ old('tanggal_buat') }}">
                                        </div>

                                         <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control
                                            @error('deskripsi') is-invalid
                                            @enderror" name="deskripsi"
                                            placeholder="Masukkan Konten Blog">{{ old('deskripsi') }}</textarea>
                                        </div>

                                         <div class="form-group">
                                            <label for="gambar" class="form-label">Gambar</label>
                                            <img class="img-preview img-fluid col-sm-3 mb-3" alt="">
                                            <input type="file"
                                                id="gambar"
                                                name="gambar"
                                                class="form-control"
                                                placeholder="masukkan gambar"
                                                onchange="previewImage()">
                                        </div>

                                         <div class="form-group">
                                            <label for="file_buku" class="form-label">File Buku</label>
                                            <input type="file"
                                                id="file_buku"
                                                name="file_buku"
                                                class="form-control"
                                                placeholder="masukkan file majalah">
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

    <script src="{{ url('frontend/libraries/mc/mc-calendar.min.js') }}"></script>
    <script>

    let Datepicker = MCDatepicker.create({
      el: '#datepicker',
      dateFormat: 'YYYY-mm-dd',
        bodyType: 'inline',
    })

    </script>
   <script src="{{ url('ckeditor/ckeditor.js') }}"></script>

    <script>
        CKEDITOR.addCss('.cke_editable p { margin: 0 !important; }');
        CKEDITOR.replace('deskripsi',{
            removeButtons :'Image'
        });

    </script>

@endpush

