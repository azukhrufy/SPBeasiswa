@extends('template')

@section('konten')
<br><br>
<p>Hallo, {{Session::get('username')}}. Apakabar?</p>
<!-- <p>Hallo, {{Session::get('status')}}. Apakabar?</p> -->
<div class="col-lg-6" style="margin: auto;">
	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<br>
				<img src="{{asset('img/books.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
				<div class="card-body">
					<h5 class="card-title"> List Beasiswa</h5>
					<a href="/list_beasiswa" class="btn btn-primary">Lihat Beasiswa</a>
				</div>
			</div>
		</div>
			@if(!Session::get('login'))
			<div class="col-lg-6">
				<div class="card">
					<br>
					<img src="{{asset('img/student.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
					<div class="card-body">
						<h5 class="card-title">Login</h5>
						<a href="/profile" class="btn btn-primary">Login</a>
					</div>
				</div>
			</div>
			
			@else
				@if(Session::get('status') == 'mahasiswa')
				<div class="col-lg-6">
					<div class="card">
						<br>
						<img src="{{asset('img/student.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
						<div class="card-body">
							<h5 class="card-title">Profil Mahasiswa</h5>
							<a href="/profile" class="btn btn-primary">Lihat Profil</a>
						</div>
					</div>
				</div>
				@endif

				@if(Session::get('status') == 'wali')
				<div class="col-lg-6">
					<div class="card">
						<br>
						<img src="{{asset('img/student.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
						<div class="card-body">
							<h5 class="card-title">Lihat Kelas</h5>
							<a href="/dashboard_wali" class="btn btn-primary">Lihat Kelas</a>
						</div>
					</div>
				</div>
				@endif

			@endif

		
	</div>
</div>

<br><br>

@endsection