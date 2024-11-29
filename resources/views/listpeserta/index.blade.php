@extends('tampilan.apputama')
@section('title', 'Data Peserta Lomba')
    
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Seluruh Peserta Lomba</h3>
              <div class="card-tools">
                {{-- <a href="" class="btn btn-success btn-sm"><i class="fas fa-upload" title="Tambah Data"></i> Import</a> --}}
                <a href="{{ route('listpeserta.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" title="Tambah Data"></i> Tambah</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Lengkap</th>
                  <th>NIK</th>
                  <th>Tempat Tgl Lahir</th>
                  <th>Desa</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody> 
                  @foreach ($listpesertas as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->namalengkap }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->tempat_lahir, $item->tgl_lahir }}</td>
                    <td>{{ $item->desa }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>
                      {{-- <a href="#" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                      <a href="{{ route('datasiswa.edit',$item->id) }}" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a> --}}
                      <form action="{{ route('listpeserta.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="#" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('listpeserta.edit', $item->id) }}" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
                        @if (Auth()->user()->role == 'admin_global')
                        <button class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete the record {{ $item->namalengkap }} ?')"><i class="fas fa-trash-alt"></i></button>
                        @endif
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>NIK</th>
                    <th>Tempat Tgl Lahir</th>
                    <th>Desa</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Edit</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  @include('sweetalert::alert')
@endsection

@section('javascript')
        <script>
          $(function () {
            $("#example1").DataTable({
              "responsive": true, "lengthChange": false, "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          });
        </script>
@endsection
