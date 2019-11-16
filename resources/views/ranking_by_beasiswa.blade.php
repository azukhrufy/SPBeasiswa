@extends('template')

@section('konten')
<br>
@foreach($beasiswa as $b)
<div class="card" style="margin: 3%;">
	<div class="card-body">
		<h5 class="card-title"> {{ $b->nama_beasiswa }} </h5>
		<hr>
		<div class="row">
			<div class="col-lg-4">
				<img src="{{asset('img/books.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
			</div>
			<div class="col-lg-8">
				<p>{{ $b->deskripsi_beasiswa }}</p>
				<p>Kouta: {{ $b->kuota }} Orang</p>
				<p>Pendaftar: {{ $b->Pendaftar }} Orang telah mendaftar</p>
				<div class="row col-md-6">
					<!-- <div class="col-md-5">
						<a href="/profile" class="btn btn-primary">Lihat Pendaftar</a>
					</div> -->
					<div class="col-md-5">
						<form action="/ranking_per_beasiswa" method="GET">
							<input type="hidden" name="id_beasiswa" value="{{ $b->id_beasiswa }}">
							<button type="submit" class="btn btn-success col-md-12">
                                    {{ __('Lihat Pendaftar') }}
            				</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection