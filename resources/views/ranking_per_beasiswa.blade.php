@extends('template')

@section('konten')

	<table class="table col-md-10" border="1" style="margin: auto; text-align: center;">
		<thead class="thead-dark">
			<tr class="table-primary">
					<!-- <td>Kode Pesanan</td> -->
					<!-- <td>Nama</td> -->
					<td>NIM</td>
					<td>Nama</td>
					<td>IPK</td>
					<td>Skor IPK</td>
			</tr>
		</thead>
		@foreach($pendaftar as $p)
		<tr>
			<td>{{ $p->nim }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->ipk }}</td>
			<td>
				@if( $p->ipk > 3.5 and $p->ipk < 4 )
					<p>A</p>
				@endif
				@if( $p->ipk > 3.0 and $p->ipk < 3.4 )
					<p>B</p>
				@endif
			</td>
		</tr>
		@endforeach
		<br>
	</table>
	<br>
@endsection