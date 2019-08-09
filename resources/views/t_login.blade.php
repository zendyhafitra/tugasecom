@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br />
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<h1> Silahkan Login</h1>
<form action="{{ url('t_login')}}" method="POST">
	@csrf
	
	username: <input type="text" name="username" /></br>
	password: <input type="password" name="password" /><br/>
	
	<input type="submit" value="Login" />
</form>