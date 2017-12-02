<!DOCTYPE html>
<html lang="en">
<head>
	<title>Seller Box</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
	 <link rel="stylesheet" href=" {{ asset('css\bootstrap-3.3.7-dist\css\bootstrap.min.css') }} ">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		@include('layouts.partials._shop_header')
		@yield('content')
		<div class="footer">
			@include('layouts.partials._footer')
		</div>	
	</div>
</body>
</html>