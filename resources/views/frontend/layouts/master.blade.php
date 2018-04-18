<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Юг Строй Инвест</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<header>
		@include('frontend.partials._header')
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		@include('frontend.partials._footer')
	</footer>

	<script src="/js/jquery.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>