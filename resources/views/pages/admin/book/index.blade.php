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
                                <a class="btn btn-info" href="{{ route('admin-book-create') }}">Tambahkan file Buku</a>
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
                            <th>Judul Buku</th>
                            <th>Deskripsi Singkat</th>
                            <th>Gambar</th>
                            <th>File Buku</th>
                            <th>Tanggal Buat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration  }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->deskripsi_singkat }}</td>

                            <td>
                                <img src= "{{ Storage::url($item->gambar) }}" style="width:150px" alt="">
                            </td>
                            <td><div class="badge badge-primary">Wajib ekstensi PDF</div></td>

                            <td>

                             {{  strftime("%d %B %Y", strtotime($item->tanggal_buat)) }}

                            </td>
                            {{-- strftime( "%A, %d %B %Y %H:%M", time());  --}}
                            <td>
                                <a href="{{ route('admin-book-show', $item->slug) }}" class="btn btn-primary">
                                     <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('admin-book-edit', $item->id) }}" class="btn btn-primary btn-warning">
                                     <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{ route('admin-book-delete', $item->id) }}" method="POST" class="d-inline">

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

