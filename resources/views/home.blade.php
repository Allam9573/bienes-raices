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
        <h1>Administracion de Propiedades</h1>
        @if ($propiedades == null)
            <h2 class="mt-5 text-secondary">No existen propiedades</h2>
            {{ $propiedades }}
            <a href="{{ route('crear') }}" class="btn btn-dark rounded-pill">Nueva Propiedad</a>
        @else
            <table class="table mt-5">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Color</th>
                        <th scope="col">Area (metros)</th>
                        <th scope="col">Tipo de Propiedad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($propiedades as $propiedad)
                        <tr>
                            <th scope="row">{{ $propiedad->codigoPropiedad }}</th>
                            <td> {{ $propiedad->color }} </td>
                            <td> {{ $propiedad->metros }} m^2</td>
                            <td> {{ $propiedad->tipoPropiedad }} </td>
                            <td>
                                <a href="{{route('editar', $propiedad->codigoPropiedad)}}" class="btn btn-outline-primary rounded-pill">Editar</a>
                                <a href="{{route('eliminar', $propiedad->codigoPropiedad)}}" class="btn btn-danger rounded-pill">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                </tbody>
            </table>
            <a href="{{ route('crear') }}" class="btn btn-dark rounded-pill">Nueva Propiedad</a>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
