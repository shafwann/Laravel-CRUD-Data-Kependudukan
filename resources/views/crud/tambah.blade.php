@extends('crud.master')
@section('tambah')
<html>
  <head>
  <title>Index</title>
</head>
  <body>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="prosestambah" method="post">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">NIK</label>
                      <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Jenis Kelamin</label>
                      <select class="form-control" id="gender" name="gender">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Status Perkawinan</label>
                      <select class="form-control" name="status" id="status">
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Kewarganegaraan</label>
                      <select class="form-control" name="warga" id="warga">
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tempat Lahir</label>
                      <input type="text" class="form-control" id="asal" name="asal" placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Golongan Darah</label>
                      <select class="form-control" name="darah" id="darah">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                      </select>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button name="submit" type="submit" class="btn btn-block1 btn-outline-info">Submit Tambah</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
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