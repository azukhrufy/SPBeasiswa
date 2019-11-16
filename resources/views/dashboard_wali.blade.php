@extends('template')

@section('konten')
<br>
<a href="/profile">< Back </a>
<br>
@foreach($mahasiswa as $m)
@if($m->nim_awal != 0 and $m->nim_akhir != 0)
<div class="col-lg-9" style="margin: auto;">
	<div class="row">
		<div class="col-lg-4">
			<div class="card">
				<br>
				<img src="{{asset('img/books.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
				<div class="card-body">
					<h5 class="card-title"> Ranking Pendaftar </h5>
					<br>
					<a href="/ranking_by_beasiswa" class="btn btn-primary">Lihat Ranking</a>
				</div>
			</div>
		</div>
			<div class="col-lg-4">
				<div class="card">
					<br>
					<img src="{{asset('img/student.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
					<div class="card-body">
						<h5 class="card-title"> Penilaian Pendaftar </h5>
						<br>
						<a href="/form_data_keluarga" class="btn btn-primary">Beri Nilai</a>

					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<br>
					<img src="{{asset('img/student.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
					<div class="card-body">
						<h5 class="card-title"> Ganti Nim anak wali </h5>
						<br>
						<a href="/profile" class="btn btn-primary">Ubah Nim</a>
					</div>
				</div>
			</div>
	</div>
</div>
@else
<div class="card" style="margin: 3%;">
	<div class="card-body">
		<p>Anda belum mengisi nim anggota kelas anda <a href="/pilihform">silahkan isi nim anggota kelas</a> </p>
	</div>	
</div>
@endif
<br>
@endforeach
@endsection