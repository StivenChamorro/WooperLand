<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Artículos</title>
    <!-- Agregamos la librería de FontAwesome -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>LISTA DE ARTICULOS</h1>

        <table class="custom-table">
            <tr>
                <th>ID</th>
                <th>Nombre del Artículo</th>
                <th>Tipo de Artículo</th>
                <th>Costo</th>
                <th>Descripción del Artículo</th>
                <th>Mostrar</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($articles as $article)
            {{-- creo una fila --}}
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->nombre_articulo}}</td>
                <td>{{$article->tipo_articulo}}</td>
                <td>{{$article->costo}}</td>
                <td>{{$article->desc_art}}</td>
                <td><a href="{{route('article.show', $article->id)}}" class="button"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{ route('article.edit', $article->id) }}" class="button"><i class="fa-solid fa-pen"></i></a>
                </td>

                <form action="{{route('article.destroy',$article->id)}}" method="POST">
                    @csrf
                    @method('delete')

                    <td><button type="submit" class="trash-button"><i class="fas fa-trash-alt"></i></button></td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

<style>

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #EF476F;
    }
    .container {
        max-width: 95%;
        padding: 20px;
        background-color: #FFD166;
        border-radius: 5px;
        box-shadow: 0 0 10px rgb(255, 255, 255);
        margin: auto;
        margin-top: 20px;
    }


    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }

    .custom-table th,
    .custom-table td {
        border: 1px solid #ffffff;
        text-align: left;
        padding: 8px;
    }


    .custom-table th {
        background-color: #EF476F;
    }


    .button {
        background-color: #4caf50;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .trash-button {
        background-color: #EF476F;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .trash-button:hover {
        background-color: #ffa7b3;
    }
    .button:hover {
        background-color: rgb(167, 255, 249);
    }
</style>
