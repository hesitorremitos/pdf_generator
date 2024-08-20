<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diplomados</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1>Diplomados</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>C.I.</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diplomados as $diplomado)
                    <tr>
                        <td>{{ $diplomado->ci }}</td>
                        <td>{{ $diplomado->nombre_persona }}</td>
                        <td>{{ $diplomado->estado }}</td>
                        <td>{{ $diplomado->numero_carton }}</td>
                        <td>{{ $diplomado->programa }}</td>
                        <td>
                            <div>
                                <a href="{{ route('diplomados.show', $diplomado->id) }}">Diploma</a>
                            </div>
                            <div>
                                <a href="{{ route('diplomados.resolucion', $diplomado->id) }}">Resolucion</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
</body>

</html>
