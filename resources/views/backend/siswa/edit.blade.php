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
									<h3 class="panel-title">Edit Data Siswa</h3>
                                    
								</div>
                                
								<div class="panel-body">
                                    <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="nama">Nama Depan</label>
                                            <input type="text" name="nama_depan" class="form-control" placeholder="Silahkan isi nama depan anda" value="{{$siswa->nama_depan}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Belakang</label>
                                            <input type="text" name="nama_belakang" class="form-control" placeholder="Silahkan isi nama belakang anda" value="{{$siswa->nama_belakang}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                                <option value="L" @if($siswa->jenis_kelamin == 'L') seleceted @endif>Laki-laki</option>
                                                <option value="P" @if($siswa->jenis_kelamin == 'P') seleceted @endif>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Agama</label>
                                            <input type="text" name="agama" class="form-control" placeholder="Silahkan isi nama agama anda" value="{{$siswa->agama}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Alamat</label>
                                            <textarea class="form-control" name="alamat" rows="3" value="">{{$siswa->alamat}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Avatar</label>
                                            <input type="file" name="avatar" class="form-control">
                                        </div>

                                            <button type="submit" class="btn btn-warning text-right">Update</button>

                                </form>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
					
					</div>
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection
