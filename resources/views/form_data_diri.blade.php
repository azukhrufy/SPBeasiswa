@extends('template')

@section('konten')
<div class="card" style="margin: 3%;">
	<div class="card-body">
		<h5 class="card-title">Formulir Data Diri</h5>
		<hr>
		<br>
		<form action="/simpan_data_diri" method="GET">
			<div class="row">
				<div class="col-md-3">
					<p>Nama : </p>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<input type="text" class="form-control" name="nama" placeholder="Masukkan nama" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Nim : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" value="{{Session::get('username')}}">
					</div>
				</div>
				<div class="col-md-3">
					<p>Gender : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="gender" placeholder="L/P" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Jurusan : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="jurusan" placeholder="Contoh : Jurusan Teknik Mesin" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>Program Studi : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="prodi" placeholder="Contoh : D4 - Proses Manufaktur" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Semester : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="semester" placeholder="Contoh : 3" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>IPK : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="ipk" placeholder="Contoh : 3.14" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Tempat Lahir : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="tempat_lahir" placeholder="Contoh : Bandung" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>Tanggal Lahir : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="tanggal_lahir" placeholder="Contoh : 28/05/1999" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Nama Bank : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="nama_bank" placeholder="Contoh : BRI" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>No. Rekening : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="no_rek" placeholder="Contoh : 99923798234697" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Alamat : </p>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<input type="text" class="form-control" name="alamat" placeholder="Contoh : Jl. Ir H Juanda" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Kabupaten/Kota : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="Kota" placeholder="Contoh : Sumedang" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>KodePos : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="kodepos" placeholder="Contoh : 45221" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Alamat Email: </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Contoh : polban@polban.ac.id" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>No. Handphone : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="nohp" placeholder="Contoh : 081xxxxxx" autofocus>
					</div>
				</div>
			</div>
			<br>
			<hr>
			 <button type="submit" class="btn btn-primary col-md-12">
                                    {{ __('Simpan') }}
             </button>
		</form>
	</div>
</div>

@endsection