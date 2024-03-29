<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Registrar Propiedad:</h1>
        <div class="card mt-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Nueva Propiedad</h5>
                <form action="{{route('registrar')}}" method="POST">
                    @csrf
                    <input type="text" placeholder="Color de propiedad" name="color" id="" class="form-control rounded-pill mb-3">
                    <input type="text" placeholder="Area en metros" name="metros" id="" class="form-control rounded-pill mb-3">
                    <input type="text" placeholder="Tipo de propiedad" name="tipoPropiedad" id="" class="form-control rounded-pill mb-3">
                    <input type="submit" class="btn btn-primary rounded-pill" value="Registrar">
                    <a href="{{ route('home') }}" class="ms-3">Atras</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
