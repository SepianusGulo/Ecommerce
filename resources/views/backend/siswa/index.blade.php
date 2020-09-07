@extends('backend.layouts.master')

@section('content')


		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    
                    <div class="row text-center">
                    <div class="col-md-12">
                        @if(session('sukses'))
                            <div class="alert alert-success mt-5" role="alert">
                                    {{ session('sukses') }}
                                </div>
                            @endif
                        </div>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Siswa</h3>
                                    <div class="right">
                                        <button class="" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle lnr-2x">Tambah Data</i></button>
                                   </div>
								</div>
                                
								<div class="panel-body">
									<table class="table">
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
                                                    <td><a href="siswa/{{$siswa->id}}/profile">{{ $siswa->nama_depan }}</a></td>
                                                    <td><a href="siswa/{{$siswa->id}}/profile">{{ $siswa->nama_belakang }}</a></td>
                                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                                    <td>{{ $siswa->agama }}</td>
                                                    <td>
                                                        <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning"><i class="lnr lnr-pencil"></i></a>
                                                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')"><i class="lnr lnr-trash"></i></a>
                                                    </td>
                                                <tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
					
					</div>
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
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
        <form action="/siswa/create" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group{{$errors->has('nama_depan')? 'has-error': ''}}">
                <label for="nama">Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control" placeholder="Silahkan isi nama depan anda" value="{{old('nama_depan')}}">
                @if($errors->has('nama_depan'))
                    <p class="text-danger">{{$errors->first('nama_depan')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('nama_belakang')? 'has-error': ''}}">
                <label for="nama">Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control" placeholder="Silahkan isi nama belakang anda" value="{{old('nama_belakang')}}">
                @if($errors->has('nama_belakang'))
                    <p class="text-danger">{{$errors->first('nama_belakang')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('email')? 'has-error': ''}}">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Silahkan isi email anda" value="{{old('email')}}">
                @if($errors->has('email'))
                    <p class="text-danger">{{$errors->first('email')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('jenis_kelamin')? 'has-error': ''}}">
                <label for="name">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L"{{(old('jenis_kelamin') == 'L') ? 'selected': ''}}>Laki-laki</option>
                    <option value="P"{{(old('jenis_kelamin') == 'P') ? 'selected': ''}}>Perempuan</option>
                </select>
                @if($errors->has('jenis_kelamin'))
                    <p class="text-danger">{{$errors->first('jenis_kelamin')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('agama')? 'has-error': ''}}">
                <label for="nama">Agama</label>
                <input type="text" name="agama" class="form-control" placeholder="Silahkan isi nama agama anda" value="{{old('agama')}}">
                @if($errors->has('agama'))
                    <p class="text-danger">{{$errors->first('agama')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('alamat')? 'has-error': ''}}">
                <label for="nama">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Silahkan isi alamat anda" rows="3">{{old('alamat')}}</textarea>
                @if($errors->has('alamat'))
                    <p class="text-danger">{{$errors->first('alamat')}}</p>
                @endif
            </div>
             <div class="form-group{{$errors->has('avatar')? 'has-error': ''}}">
                <label for="nama">Avatar</label>
                <input type="file" name="avatar" class="form-control">
                @if($errors->has('alamat'))
                    <p class="text-danger">{{$errors->first('avatar')}}</p>
                @endif
            </div>
            

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
       </form>
      </div>

    </div>
 </div>

@endsection
                       