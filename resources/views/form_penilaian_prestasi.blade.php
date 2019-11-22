@extends('template')

@section('konten')

<div class="card" style="margin: 3%;">
	<div class="card-body">
	<h5 class="card-title">Formulir Data Diri</h5>
		<hr>
		<br>
		<div class="row">
			<div class="col-md-3">
					<p>Total Prestasi Internasional : </p>
			</div>
			<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" name="nama" placeholder="Masukkan nama" autofocus>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
					<p>Total Prestasi Nasional : </p>
			</div>
			<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" name="nama" placeholder="Masukkan nama" autofocus>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
					<p>Total Prestasi Regional : </p>
			</div>
			<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" name="nama" placeholder="Masukkan nama" autofocus>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
					<p>Total Prestasi Kota : </p>
			</div>
			<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" name="nama" placeholder="Masukkan nama" autofocus>
				</div>
			</div>
		</div>
</div>

@endsection