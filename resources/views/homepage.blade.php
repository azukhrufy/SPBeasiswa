@extends('template')

@section('konten')
<!-- <p>Hallo, {{Session::get('status')}}. Apakabar?</p> -->
<div id="background">
	<div class="col-md-12" style="margin-left: 3%;">
		<div class="row" style="margin: auto;">
			<div class="col-lg-6" style="margin: auto;">
			<h2 class="card-title" style="text-align: center; color: #fff; text-align: left; margin-left: 3%"> <b>Portal Online</b><br> Pendaftaran <b>Beasiswa</b> <br><b>Pol</b>iteknik Negeri <b>Ban</b>dung</h5>
			</div>
			<div class="col-lg-6" style="margin: auto; align-items: center; display: flex;">
				<img src="{{asset('img/platform.svg')}}" alt="Card image cap" width="400px" height="250px" style="margin:auto;">
			</div>
		</div>
	</div>
</div>
<br>
<br>
<div>
<div class="col-lg-6" style="margin: auto;">
	<div class="row">
		<div class="col-lg-6">
			<div class="card" style="border-radius: 30px;">
				<br>
				<img src="{{asset('img/list.svg')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
				<div class="card-body">
					<h5 class="card-title" style="text-align: center;"> List Beasiswa</h5>
					<a href="/list_beasiswa" class="btn btn-primary">Lihat Beasiswa</a>
				</div>
			</div>
		</div>
			@if(!Session::get('login'))
			<div class="col-lg-6">
				<div class="card" style="border-radius: 30px;">
					<br>
					<img src="{{asset('img/login.svg')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Login</h5>
						<a href="/profile" class="btn btn-primary">Login</a>
					</div>
				</div>
			</div>
			
			@else
				@if(Session::get('status') == 'mahasiswa')
				<div class="col-lg-6">
					<div class="card" style="border-radius: 30px;">
						<br>
						<img src="{{asset('img/profile.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
						<div class="card-body">
							<h5 class="card-title" style="text-align: center;">Profil Mahasiswa</h5>
							<a href="/profile" class="btn btn-primary">Lihat Profil</a>
						</div>
					</div>
				</div>
				@endif

				@if(Session::get('status') == 'wali')
				<div class="col-lg-6">
					<div class="card" style="border-radius: 30px;">
						<br>
						<img src="{{asset('img/kelas.svg')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
						<div class="card-body">
							<h5 class="card-title" style="text-align: center;">Lihat Kelas</h5>
							<a href="/dashboard_wali" class="btn btn-primary">Lihat Kelas</a>
						</div>
					</div>
				</div>
				@endif

			@endif

		
	</div>
</div>
</div>

<br><br>

@endsection