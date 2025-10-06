<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title> @yield('cim')ő webalkalmazásom</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="/udvozles" class="nav-link">Udvozles</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="/bevasarlolista" class="nav-link">Bevasarlas</a></li>
        <li class="nav-item"><a href="/felhasznaloiadat?felhasznalonev=MB&vezeteknev=Barney&keresztnev=Mark" class="nav-link">Felhasznalo</a></li>
    </ul> </header>

<div>@yield('tartalom')</div>
</body>
</html>
