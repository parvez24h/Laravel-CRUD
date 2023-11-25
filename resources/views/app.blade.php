<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
  <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand fs-2 fw-bold" href="/">Laravel CRUD</a>
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                    <a class="nav-link fs-5 fw-medium" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item  me-5">
                    <a class="nav-link fs-5 fw-medium" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-5 fw-medium" href="/contact">Contact</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        @if($message = Session::get('success'))
        <div class="container mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif

        @yield('main')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>