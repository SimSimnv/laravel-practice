<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Acme</title>
</head>
<body>
<nav>
	<div>
		This is the nav
	</div>
</nav>

<div class="container">
	@yield('content')	
</div>

@yield('footer')
{{-- @include('inc.sidebar') --}}

</body>
</html>