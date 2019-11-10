@if(\Session::has('alert'))
    <div class="alert alert-danger">
        <div>{{Session::get('alert')}}</div>
    </div>
@endif
@if(\Session::has('alert-success'))
    <div class="alert alert-success">
        <div>{{Session::get('alert-success')}}</div>
    </div>
@endif
<!DOCTYPE html>
<html>
<head>
	<title>Beasiswa Politeknik Negeri Bandung</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.css') }}">
</head>
<style>
body {
	background-image: url("https://lz12v4f1p8c1cumxnbiqvm10-wpengine.netdna-ssl.com/wp-content/uploads/2015/11/epic-blue-green-gradient-ui-background.jpg");
    background-repeat:no-repeat;
} 

</style>
<body>
<div class="col-md-6" style="margin: auto; margin-top: 12%;">
	<div class="card" style="">
		<div class="card-body" style="text-align: center; margin: 3%;">
			
			<br>
			<div class="row">
				<div class="col-md-5">
				<br>
					<img src="{{ asset('img/polban.png') }}" width="150" height="180">	
				</div>
				<div class="col-md-7">
					<form method="GET" action="/login">
						<div class="form-group" style="text-align: left;">
						<br>
						<br>
							<h3>Silahkan Login</h3>
							<input type="text" class="form-control" name="username" placeholder="Input Username" autofocus>
							<br>
							<input type="password" class="form-control" name="password" placeholder="Input Password" autofocus>
							<br>
							 <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                             </button>
						</div>
					</form>
				</div>
			</div>
			<br>
			<br>
		</div>
	</div>
</div>

</body>
</html>