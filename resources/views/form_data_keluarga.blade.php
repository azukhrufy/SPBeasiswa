@extends('template')

@section('konten')
<div class="card" style="margin: 3%;">
	<div class="card-body">
		<h5 class="card-title">Formulir Data Keluarga</h5>
		<hr>
		<br>
		<form action="/simpan_data_keluarga" method="GET">
			<input type="hidden" name="nim" value="{{Session::get('username')}}">
			<div class="row">
				<div class="col-md-3">
					<p>Nama Ayah / Wali: </p>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<input type="text" class="form-control" name="nama_ayah" placeholder="Masukkan nama Ayah" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Tempat Lahir : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="tempat_lahir_ayah" placeholder="Contoh : Bandung" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>Tanggal Lahir : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="tanggal_lahir_ayah" placeholder="Contoh : 28/05/1999" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Alamat : </p>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<input type="text" class="form-control" name="alamat_ayah" placeholder="Contoh : Jl. Ir H Juanda" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Pekerjaan : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Contoh : Wiraswasta" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>Penghasilan : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="penghasilan_ayah" placeholder="Contoh : 5000000" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Pekerjaan Sambilan : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="pekerjaan_sambilan_ayah" placeholder="Contoh : Wirausaha" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>Penghasilan Sambilan : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="penghasilan_sambilan_ayah" placeholder="Contoh : 5000000" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>No.Telepon: </p>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<input type="text" class="form-control" name="nohp_ayah" placeholder="Contoh : 0857 xxxx xxx" autofocus>
					</div>
				</div>
			</div>
			<br>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<p>Nama Ibu / Wali: </p>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<input type="text" class="form-control" name="nama_ibu" placeholder="Masukkan nama Ibu" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Tempat Lahir : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="tempat_lahir_ibu" placeholder="Contoh : Bandung" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>Tanggal Lahir : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="tanggal_lahir_ibu" placeholder="Contoh : 28/05/1999" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Alamat : </p>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<input type="text" class="form-control" name="alamat_ibu" placeholder="Contoh : Jl. Ir H Juanda" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Pekerjaan : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Contoh : Wiraswasta" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>Penghasilan : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="penghasilan_ibu" placeholder="Contoh : 5000000" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Pekerjaan Sambilan : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="pekerjaan_sambilan_ibu" placeholder="Contoh : Wirausaha" autofocus>
					</div>
				</div>
				<div class="col-md-3">
					<p>Penghasilan Sambilan : </p>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="penghasilan_sambilan_ibu" placeholder="Contoh : 5000000" autofocus>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>No.Telepon: </p>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<input type="text" class="form-control" name="nohp_ibu" placeholder="Contoh : 0857 xxxx xxx" autofocus>
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