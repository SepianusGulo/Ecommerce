<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswa </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                 @if(session('sukses'))
                    <div class="alert alert-success mt-5" role="alert">
                        {{ session('sukses') }}
                    </div>
                @endif
            </div>
        </div>
<div class="row mt-3">
    <div class="col-md-12">
        <h2 class="text-left">Data Siswa</h2>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plush">Tambah Siswa</i></button>
        <table class="table table-bordered">

                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Depan</th>
                        <th scope="col">Nama Belakang</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_siswa as $siswa )

                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $siswa->nama_depan }}</td>
                            <td>{{ $siswa->nama_belakang }}</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                            <td>{{ $siswa->agama }}</td>
                            <td>
                                <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                    <tr>
                    @endforeach

                </tbody>
                </table>
    </div>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/siswa/create" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control" placeholder="Silahkan isi nama depan anda">
            </div>
            <div class="form-group">
                <label for="nama">Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control" placeholder="Silahkan isi nama belakang anda">
            </div>
            <div class="form-group">
                <label for="name">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Agama</label>
                <input type="text" name="agama" class="form-control" placeholder="Silahkan isi nama agama anda">
            </div>
            <div class="form-group">
                <label for="nama">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Silahkan isi alamat anda" rows="3"></textarea>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
       </form>
      </div>

    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
