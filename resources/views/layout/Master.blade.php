<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>AdminHub</title>
    @livewireStyles
</head>
<body>
 
@include('components.header')
@include('components.navbar')
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('admin/assets/js/script.js') }}"></script>

<script>
    document.querySelector('.dropdown img').onclick = function() {
        var dropdowns = document.querySelector('.dropdown-content');
        if (dropdowns.style.display === 'block') {
            dropdowns.style.display = 'none';
        } else {
            dropdowns.style.display = 'block';
        }
    }
</script>
@livewireScripts
</body>
</html>