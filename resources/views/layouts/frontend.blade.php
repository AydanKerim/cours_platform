<!DOCTYPE HTML> <!-- Website template by freewebsitetemplates.com -->
<html>

<head>
	<meta charset="UTF-8">
	<title>Law Firm</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
	@include('partials.header')

	@yield('content')

	@include('partials.footer')


</body>

</html>