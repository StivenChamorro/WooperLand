<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'Happy Monkey', cursive; /* Tipo de letra */
            background-color: #FFD166; /* Fondo amarillo */
        }

        h1 {
            color: #333; /* Color del título */
        }

        table {
            width: 100%; /* Ancho total de la tabla */
            border-collapse: collapse; /* Colapso de bordes de tabla */
            margin-bottom: 20px; /* Espacio inferior */
        }

        th, td {
            padding: 10px; /* Espacio interno */
            text-align: left; /* Alineación de texto izquierda */
            border-bottom: 2px solid #fff; /* Borde inferior */
        }

        th {
            background-color: #333; /* Color de fondo del encabezado */
            color: #fff; /* Color del texto del encabezado */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Fondo alternado para filas pares */
        }

        a.button {
            display: inline-block; /* Mostrar como bloque en línea */
            padding: 8px 16px; /* Espacio interno */
            text-decoration: none; /* Quitar subrayado */
            color: #fff; /* Color del texto */
            background-color: #EF476F; /* Color de fondo del botón */
            border-radius: 20px; /* Borde redondeado */
            transition: background-color 0.3s; /* Transición al pasar el ratón */
        }

        a.button:hover {
            background-color: #d73858; /* Color de fondo del botón al pasar el ratón */
        }

        form {
            display: inline; /* Mostrar el formulario en línea */
            margin: 0; /* Eliminar márgenes */
        }

        button[type="submit"] {
            padding: 8px 16px; /* Espacio interno */
            border: none; /* Quitar borde */
            border-radius: 20px; /* Borde redondeado */
            background-color: #EF476F; /* Color de fondo del botón */
            color: #fff; /* Color del texto */
            cursor: pointer; /* Cambiar cursor al pasar el ratón */
            transition: background-color 0.3s; /* Transición al pasar el ratón */
        }

        button[type="submit"]:hover {
            background-color: #d73858; /* Color de fondo del botón al pasar el ratón */
        }
    </style>
</head>
<body>
 
    <h1>Listado de niños</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Nickname</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kids as $kid)
                <tr>
                    <td>{{ $kid->id }}</td>
                    <td>{{ $kid->nombre }}</td>
                    <td>{{ $kid->apellido }}</td>
                    <td>{{ $kid->edad }}</td>
                    <td>{{ $kid->nickname }}</td>
                    <td>{{ $kid->avatar }}</td>
                    <td>
                        <a href="{{ route('niños.show', $kid->id) }}" class="button">Mostrar</a>
                        <form action="{{ route('niños.destroy', $kid->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

