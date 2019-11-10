@extends('template')

@section('konten')

@foreach($mahasiswa as $m)
<div class="card" style="margin: 3%;">
	<div class="card-body">
		<h5 class="card-title">{{ $m->nama }}</h5>
		@if($m->status_form == 1)
			<a href="/pilihform" style="text-align: right;">Edit Data</a>
		@endif
		<hr>
		<br>

		@if($m->status_form == 0)
			<p>Anda belum mengisi form beasiswa <a href="/pilihform">silahkan isi Form Beasiswa</a> </p>

		@else
			@foreach($form_beasiswa as $form)
				<div class="row">
					<div class="col-md-3">
						<p>Nim </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->nim}}</p>
					</div>
					<div class="col-md-3">
						<p>Gender </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->gender}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Jurusan </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->jurusan}}</p>
					</div>
					<div class="col-md-3">
						<p>Program Studi </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->prodi}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Tempat Lahir  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->tempat_lahir}}</p>
					</div>
					<div class="col-md-3">
						<p>Tanggal Lahir  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->tanggal_lahir}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Semester  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->semester}}</p>
					</div>
					<div class="col-md-3">
						<p>IPK  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->ipk}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Nama Bank  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->nama_bank}}</p>
					</div>
					<div class="col-md-3">
						<p>No. Rekening  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->no_rek}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Kabupaten/Kota  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->Kota}}</p>
					</div>
					<div class="col-md-3">
						<p>KodePos  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->kodepos}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Email  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->email}}</p>
					</div>
					<div class="col-md-3">
						<p>No. Telepon  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$form->nohp}}</p>
					</div>
				</div>

			@endforeach
		@endif
	</div>
</div>
<br>
@if($m->status_form != 0)
<div class="card" style="margin: 3%;">
	<div class="card-body">
		<h5 class="card-title">Data Keluarga Mahasiswa</h5>
		<hr>
		@if($m->status_form_keluarga == 0 )
			<p>Anda belum mengisi form Keluarga <a href="/pilihform">silahkan isi Form Keluarga</a> </p>
		@else
		@foreach($orangtua_mhs as $ortu)
				<div class="row">
					<div class="col-md-3">
						<p>Nama Ayah/Wali </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->nama_ayah}}</p>
					</div>
					<div class="col-md-3">
						<p>Nama Ibu/Wali </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->nama_ibu}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Tempat Lahir </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->tempat_lahir_ayah}}</p>
					</div>
					<div class="col-md-3">
						<p>Tempat Lahir </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->tempat_lahir_ibu}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Tanggal Lahir  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->tanggal_lahir_ayah}}</p>
					</div>
					<div class="col-md-3">
						<p>Tanggal Lahir  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->tanggal_lahir_ibu}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Pekerjaan  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->pekerjaan_ayah}}</p>
					</div>
					<div class="col-md-3">
						<p>Pekerjaan  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->pekerjaan_ibu}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Penghasilan  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->penghasilan_ayah}}</p>
					</div>
					<div class="col-md-3">
						<p>Penghasilan </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->penghasilan_ibu}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p>Pekerjaan Sambilan  </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->pekerjaan_sambilan_ayah}}</p>
					</div>
					<div class="col-md-3">
						<p>Pekerjaan Sambilan </p>
					</div>
					<div class="col-md-3">
						<p>: {{$ortu->pekerjaan_sambilan_ibu}}</p>
					</div>
				</div>

			@endforeach
		@endif
	</div>
</div>
@endif
<br>
@if($m->status_form != 0)
<div class="card" style="margin: 3%;">
	<div class="card-body">
		<h5 class="card-title">Data Prestasi dan Pengalaman Mahasiswa</h5>
		<hr>
		@if($m->status_form_lampiran == 0 )
			<p>Anda belum mengisi form Keluarga <a href="/pilihform">silahkan isi Form Prestasi dan Pengalaman</a> </p>
		@endif
	</div>
</div>
@endif
@endforeach
@endsection