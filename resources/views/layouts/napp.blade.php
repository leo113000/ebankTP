<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('includes.head')
	<!-------- Scripts onLoad------->
	<script src="/js/jquery.js"></script>
	<script src="/js/materialize.min.js"></script>
</head>
<body>
	<header>
		@include('includes.header')
	</header>
	@include('includes.sidebar')
	<div class="row">
		<div class="col s12 m12 l9 offset-l3">
			@yield('content')
		</div>
	</div>
<script> 
    $(document).ready(function(){
       $('.button-collapse').sideNav();
       });
</script>
</body>

</html>
