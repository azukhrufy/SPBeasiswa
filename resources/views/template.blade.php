<!DOCTYPE html>
<html>
<head>
	<title>Beasiswa Politeknik Negeri Bandung</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style-home.css') }}">
</head>
<body>
<table>
	<tr>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary-polban" style="text-align: center;">
		  <a class="navbar-brand" href="/home"><strong>Beasiswa</strong> Polban</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto" style="float: right;">
		    @if(Session::get('login'))
		      <li class="nav-item active">
			       <a class="nav-link" href="/logout">Logout <span class="sr-only">(current)</span></a>
		      </li>
		    @endif
		      <li class="nav-item active">
		       		<a class="nav-link">{{Session::get('username')}}</a>
		      </li>
		      <!-- <li class="nav-item">
		        <a class="nav-link" href="">Penilai</a>
		      </li> -->
		    </ul>
		  </div>
		</nav>
	</tr>
	<tr>
	<!-- <div id="background">
	</div> -->
		@yield('konten')
	</tr>
	<tr>
		<div style="text-align: center; color: #fff; margin: auto;" id="background">
			<h1>Footer</h1>
		</div>
	</tr>
</table>

</body>
</html>