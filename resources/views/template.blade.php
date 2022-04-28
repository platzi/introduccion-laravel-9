<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proyecto web</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container px-4 mx-auto">
		<header class="flex justify-between items-center py-4">
			<div class="flex items-center flex-grow gap-4">
				<a href="{{ route('home') }}">
					<img src="{{ asset('images/logo.png') }}" class="h-12">
				</a>
				<form action="">
					<input type="text" placeholder="Buscar">
				</form>
			</div>

			@auth
			<a href="{{ route('dashboard') }}">Dashboard</a>
			@else
			<a href="{{ route('login') }}">Login</a>
			@endif
		</header>

		@yield('content')
	</div>
</body>
</html>
