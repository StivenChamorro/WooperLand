<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Artículos</title>
    <!-- Agregamos la librería de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>LISTA DE NIVELES</h1>

        <table class="custom-table"> <!-- Agregamos una clase para la tabla -->
            <tr>
                <th>ID</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>caracteristica</th>
                <th>premio</th>
                <th>tema</th>
                <th>Mostrar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($levels as $level)
            {{-- creo una fila --}}
            <tr>
                <td>{{$level->id}}</td>
                <td>{{$level->name}}</td>
                <td>{{$level->prize}}</td>
                <td>{{$level->help}}</td>
                <td>{{$level->description}}</td>
                <!-- Usamos iconos de FontAwesome para mostrar y eliminar -->
                <td><a href="{{route('nivel.show', $level->id)}}" class="button"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{ route('nivel.edit', $level->id) }}" class="button"><i class="fa-solid fa-pen"></i></a>
                </td>   
                <form action="{{route('nivel.destroy',$level->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <!-- Cambiamos el color del botón de la caneca a rosa pastel -->
                    <td><button type="submit" class="trash-button"><i class="fas fa-trash-alt"></i></button></td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

<style>
    /* Estilos generales */
    body {
        font-family:  'Happy Monkey', cursive;
        margin: 0;
        padding: 0;
        background-color: #EF476F;
    }

    /* Estilos para el contenedor principal */
    .container {
        max-width: 95%; /* Ajusté el ancho del contenedor */
        padding: 20px;
        background-color: #FFD166;
        border-radius: 5px;
        box-shadow: 0 0 10px rgb(255, 255, 255);
        margin: auto; /* Centrado horizontalmente */
        margin-top: 20px; /* Espacio superior */
    }

    /* Estilos para la tabla */
    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }

    .custom-table th,
    .custom-table td {
        border: 1px solid #ffffff; /* Cambiamos el color del borde */
        text-align: left;
        padding: 8px;
    }

    /* Estilos para las celdas de encabezado */
    .custom-table th {
        background-color: #EF476F;
    }

    /* Estilos para los botones */
    .button {
        background-color: #4caf50;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block; /* Para que los botones se muestren en línea */
    }

    /* Estilos para el botón de la caneca */
    .trash-button {
        background-color: #EF476F; /* Rosa pastel */
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .trash-button:hover {
        background-color: #ffa7b3; /* Cambiamos el color al pasar el ratón */
    }
</style>