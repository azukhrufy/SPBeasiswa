@extends('template')

@section('konten')
<br>
<a href="/profile">< Back </a>
<br>
<div class="col-lg-9" style="margin: auto;">
	<div class="row">
		<div class="col-lg-4">
			<div class="card">
				<br>
				<img src="{{asset('img/books.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
				<div class="card-body">
					<h5 class="card-title"> Form Data Diri</h5>
					<br>
					<a href="/form_data_diri" class="btn btn-primary">Isi Form</a>
				</div>
			</div>
		</div>
			<div class="col-lg-4">
				<div class="card">
					<br>
					<img src="{{asset('img/student.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
					<div class="card-body">
						<h5 class="card-title">Form Keluarga</h5>
						<br>
						<a href="/form_data_keluarga" class="btn btn-primary">Isi Form</a>

					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<br>
					<img src="{{asset('img/student.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
					<div class="card-body">
						<h5 class="card-title">Form Prestasi dan Pengalaman</h5>
						<a href="/profile" class="btn btn-primary">Isi Form</a>
					</div>
				</div>
			</div>
	</div>
</div>
<br>


@endsection