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

                    <div class="row mb-4">
                        <div class="col">
                            <div class="float-start">
                                <a class="btn btn-info" href="{{ route('admin-article-create') }}">Buat majalah</a>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <div class="float-start">
                                <a class="btn btn-outline-secondary" href="{{ route('admin-article') }}">Kembali</a>
                            </div>
                        </div>
                    </div>

                   <div class="row">
                    <table id="table_id" class="display table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $article->nama  }}</td>
                        </tr>
                        <tr>
                            <th>Alt</th>
                            <td>{{ $article->alt  }}</td>
                        </tr>
                        <tr>
                            <th>Meta</th>
                            <td>{{ $article->meta  }}</td>
                        </tr>

                        <tr>
                            <th>Tanggal buat</th>
                            <td>{{ $article->tanggal_buat  }}</td>
                        </tr>

                        <tr>
                            <th>Artikel</th>
                            <td>{!! $article->deskripsi  !!}</td>
                        </tr>

                        <tr>
                            <th>Gambar</th>
                            <td>
                                <img src= "{{ Storage::url($article->gambar) }}" style="width:150px" alt="">
                            </td>
                        </tr>

                    </table>
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

</body>
@endsection

@push('prepend-script')
    <script>
        CKEDITOR.addCss('.cke_editable p { margin: 0 !important; }');
        CKEDITOR.replace('body');

         $(document).ready( function () {
            $('#table_id').DataTable({
                "columnDefs": [
                { "width": "25%", "targets": 0 },
                { "width": "50%", "targets": 1 },
                { "width": "50%", "targets": 2 },
                { "width": "25%", "targets": 3 }
            ]
            });
        });
    </script>

@endpush

@push('prepend-style')
     <style>
        p {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }
    </style>
@endpush
