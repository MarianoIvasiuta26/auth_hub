<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="form-container">
        <form action="{{route('register.store')}}" method="POST">
            @csrf

            <label for="name"> Nombre:
                <input type="text" name="name" placeholder="Name">
            </label>
            <br>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="email"> Email:
                <input type="email" name="email" placeholder="Email">
            </label>
            <br>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="password"> Contraseña:
                <input type="password" name="password" placeholder="Password">
            </label>

            <br>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <button type="submit" class="btn btn-success">Registrarse</button>
            <a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>

        </form>
    </div>

</body>
</html>
