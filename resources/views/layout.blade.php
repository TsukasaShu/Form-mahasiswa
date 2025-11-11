<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul', 'Aplikasi Mahasiswa')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/form">Form Mahasiswa</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Homepage</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" aria-current="page" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Menu Form
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/form">Form Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="/tabel">Tabel Data</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/about">About</a>
                </li>
                
            </ul>

           
</nav>
    @yield('konten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>