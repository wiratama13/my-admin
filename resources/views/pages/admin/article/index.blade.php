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
                                <a class="btn btn-info" href="{{ route('admin-article-create') }}">Buat Artikel</a>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                   <div class="row d-flex">
                   <div class="col">
                     <table id="table_id" class="display table table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Deskripsi Singkat</th>
                            <th>Tanggal Buat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                        <tr>
                            <td>{{ $loop->iteration  }}</td>
                            <td>{{ $article->nama }}</td>
                            <td>
                                <img src= "{{ Storage::url($article->gambar) }}" style="width:150px" alt="">
                            </td>
                            <td>{!! $article->deskripsi_singkat !!}</td>
                            <td>{{  strftime("%d %B %Y", strtotime($article->tanggal_buat)) }}</td>
                            <td>
                                <a href="{{ route('admin-article-show', $article->slug) }}" class="btn btn-primary">
                                     <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('admin-article-edit', $article->id) }}" class="btn btn-primary btn-warning">
                                     <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{ route('admin-article-delete', $article->id) }}" method="POST" class="d-inline">

                                @csrf
                                @method('delete')
                                <button class="btn btn-danger border-0" onclick="return confirm('are you sure ?')">
                                <i class="fa fa-trash"></i>
                                </button>

                                </form>
                            </td>
                        </tr>
                        @empty

                        @endforelse

                    </tbody>
                    </table>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endpush

@push('prepend-script')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
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

