@extends('template')

@section('konten')

	<table class="table col-md-10" border="1" style="margin: auto; text-align: center;">
		<thead class="thead-dark">
			<tr class="table-primary">
					<!-- <td>Kode Pesanan</td> -->
					<td>Nama Beasiswa</td>
					<td>NIM</td>
					<td>Nama</td>
					<td>IPK</td>
					<td>Skor IPK</td>
					<td colspan="2">Skor Prestasi</td>
					<td>Nilai Sikap</td>
					<td>Skor Sikap</td>
					<td colspan="2">Skor Organisasi</td>
					<td>Skor Kemampuan Ekonomi</td>
					<td>Skor Akhir</td>
			</tr>
		</thead>
		@foreach($rankingpendaftar as $p)
		<tr>
			<td>{{ $p->nama_beasiswa }}</td>
			<td>{{ $p->nim }}</td>
			<td>{{ $p->nama_mahasiswa }}</td>
			<td>{{ $p->ipk }}</td>
			<td>{{ $p->skor_ipk }}</td>
			<td>
					{{ $p->skor_prestasi }}
			</td>
			<td>
					<form action="/ranking_per_beasiswa">
						<button type="submit" class="btn btn-success col-md-12">
	                               {{ __('Nilai') }}
	            		</button>
					</form>
			</td>
			<td>A</td>
			<td>{{ $p->skor_perilaku }}</td>
			<td>{{ $p->skor_organisasi }}</td>
			<td>
					<form action="/ranking_per_beasiswa">
						<button type="submit" class="btn btn-success col-md-12">
	                               {{ __('Beri Nilai') }}
	            		</button>
					</form>
			</td>
			<td>{{ $p->skor_kemampuan_ekonomi }}</td>
			<td>{{ $p->skor_akhir }}</td>

		</tr>
		@endforeach
		<br>
	</table>
	<br>
@endsection