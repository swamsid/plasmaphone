<!DOCTYPE html>
<html>
@include('layouts._head')

@yield('extra_styles')

<body>
	@include('layouts._sidebar')

	@yield('content')

</body>

@include('layouts._script')

@yield('extra_scripts')


</html>