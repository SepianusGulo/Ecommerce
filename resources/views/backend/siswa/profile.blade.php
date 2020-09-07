@extends('backend.layouts.master')
@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection
@section('content')
<div class="main">
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-profile">
			<div class="clearfix">
				<!-- LEFT COLUMN -->
				<div class="profile-left">
					<!-- PROFILE HEADER -->
					<div class="profile-header">
						<div class="overlay"></div>
						<div class="profile-main">
							<img src="{{$siswa->getAvatar()}}" class="img-circle" alt="Avatar" width="60" height="60">
							<h3 class="name">{{$siswa->nama_depan}}</h3>
							<span class="online-status status-available">Available</span>
						</div>
						<div class="profile-stat">
							<div class="row">
								<div class="col-md-4 stat-item">
										{{$siswa->mapel->count()}}<span>Mata Pelajaran</span>
								</div>
								<div class="col-md-4 stat-item">
									15 <span>Awards</span>
								</div>
								<div class="col-md-4 stat-item">
									2174 <span>Points</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE HEADER -->
					<!-- PROFILE DETAIL -->
					<div class="profile- mt-4">
						<div class="profile-info">
							<h4 class="heading">Detail Data Diri</h4>
							<ul class="list-unstyled list-justify">
								<li>Jenis Kelamin <span>{{$siswa->jenis_kelamin}}</span></li>
								<li>Agama <span>{{$siswa->agama}}</span></li>
								<li>Alamat <span>{{$siswa->alamat}}</span></li>

							</ul>
						</div>
						<div class="profile-info">
							<h4 class="heading">Social</h4>
							<ul class="list-inline social-icons">
								<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
							</ul>
							<div class="text-center mb-3 mt-3"><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
						</div>

						
					</div>
					<!-- END PROFILE DETAIL -->
				</div>
				<!-- END LEFT COLUMN -->
				<!-- RIGHT COLUMN -->
				<div class="profile-right">
							@if(session('error'))
                            <div class="alert alert-danger mt-5" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
							@if(session('sukses'))
                            <div class="alert alert-success mt-5" role="alert">
                                    {{ session('sukses') }}
                                </div>
                            @endif
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
								Tambah Nilai
								</button>
							<div class="panel-heading">
								<h3 class="panel-title">Mata Pelajaran</h3>
							</div>
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th>Id</th>
											<th>Kode</th>
											<th>Nama</th>
											<th>Semester</th>
											<th>Nilai</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($siswa->mapel as $mapel )
											<tr>
													<td>1</td>
													<td>{{$mapel->kode}}</td>
													<td>{{$mapel->nama}}</td>
													<td>{{$mapel->semester}}</td>
													<td><a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id}}" data-url="/api/siswa/{{$siswa->id}}/editnilai" data-title="Masukan Nilai">{{$mapel->pivot->nilai}}</a></td>
													<td>
														 <a href="/siswa/{{$siswa->id}}/{{$mapel->id}}/deletenilai" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')"><i class="lnr lnr-trash"></i></a>
													</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						<div class="panel">
							<div id="cartnilai"></div>
						</div>
						
				</div>
				<!-- END RIGHT COLUMN -->
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Nilai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/siswa/{{$siswa->id}}/addnilai" method="POST">
            {{ csrf_field() }}
			<div class="form-group">
				<label for="mapel">Mata Pelajaran</label>
				<select name="mapel" class="form-control" id="mapel">
					@foreach ($matapelajaran as $mp)
						<option value="{{$mp->id}}">{{$mp->nama}}</option>
					@endforeach
				</select>
			</div>
            <div class="form-group{{$errors->has('nilai')? 'has-error': ''}}">
                <label for="nama">Tambahkan Nilai</label>
                <input type="text" name="nilai" class="form-control" placeholder="Silahkan isi Nilai anda" value="{{old('nama_depan')}}">
                @if($errors->has('nilai'))
                    <p class="text-danger">{{$errors->first('nilai')}}</p>
                @endif
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
       </form>
      </div>
      
    </div>
  </div>
</div>
@endsection
@section('footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
		Highcharts.chart('cartnilai', {
		chart: {
			type: 'column'
		},
		title: {
			text: 'Laporan Data Nilai Siswa'
		},
		
		xAxis: {
			categories: {!!json_encode($categories)!!},
			crosshair: true
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Nilai'
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		series: [{
			name: 'Nilai',
			data: {!!json_encode($data)!!}

		}]
	});
		$(document).ready(function() {
			$('.nilai').editable();
		});
	</script>
@endsection