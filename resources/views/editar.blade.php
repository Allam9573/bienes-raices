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
    <div class="row mt-5">
        <div class="col-4"></div>
        <div class="col-4 text-center">
            <h2 class="mb-3">Editar Propiedad</h2>
            <form action="{{route('actualizar', $propiedad->codigoPropiedad)}}" method="PUT">
                @csrf
                @method('PUT')
                <input type="text" name="color" placeholder="Color de propiedad" value="{{$propiedad->codigoPropiedad}}" id="" class="form-control rounded-pill mb-3" readonly  >
                <input type="text" name="color" placeholder="Color de propiedad" value="{{$propiedad->color}}" id="" class="form-control rounded-pill mb-3">
                <input type="text" name="metros" placeholder="Area de propiedad" value="{{$propiedad->metros}} mts cuadrados" id="" class="form-control rounded-pill mb-3">
                <input type="text" name="tipoPropiedad" placeholder="Tipo de propiedad" value="{{$propiedad->tipoPropiedad}}" id="" class="form-control rounded-pill mb-3">
                <input type="submit" value="Actualizar" class="btn w-100 btn-primary rounded-pill mb-3">
                <a href="{{route('home')}}" class="btn btn-outline-primary rounded-pill w-100">Atras</a>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
