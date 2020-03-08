<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1.0" charset="UTF-8">
		<title> @yield('title') </title>

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/font-awesome/css/all.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/font-awesome/css/all.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/styles.css') }}">
		
	</head>

	<body> @yield('content') </body>

</html>