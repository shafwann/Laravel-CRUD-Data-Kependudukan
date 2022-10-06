@extends('crud.master')
@section('data')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Data</title>
</head>

<body class="hold-transition sidebar-mini">
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <!--TABEL DATA-->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Status Perkawinan</th>
                            <th>Pekerjaan</th>
                            <th>Kewarganegaraan</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Golongan Darah</th>
                            <th>Tool</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($dataPenduduk as $kode)
                          <tr>
                            <td>{{ $kode->nik }}</td>
                            <td>{{ $kode->nama }}</td>
                            <td>{{ $kode->gender }}</td>
                            <td>{{ $kode->alamat }}</td>
                            <td>{{ $kode->status }}</td>
                            <td>{{ $kode->pekerjaan }}</td>
                            <td>{{ $kode->warga }}</td>
                            <td>{{ $kode->asal }}</td>
                            <td>{{ $kode->tanggal }}</td>
                            <td>{{ $kode->darah }}</td>
                            <td><a href="{{ url('delete',$kode->id_penduduk) }}">Hapus</a></td>
                            <td><a href="{{ url('edit',$kode->id_penduduk) }}">Edit</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</body>

</html>
@endsection