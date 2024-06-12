<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
    <h1>listado de padretema</h1>


        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>fk_id_padre</th>
                    <th>fk_id_tema</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fatherTopics as $fatherTopic)
                    <tr>
                        <td>{{ $fatherTopic->id }}</td>
                        <td>{{ $fatherTopic->fk_id_padre }}</td>
                        <td>{{ $fatherTopic->fk_id_tema }}</td>
                        <td>{{ $fatherTopic->descripcion }}</td>
                        <td>
                            <a href="{{ route('padretema.show', $fatherTopic->id) }}">Mostrar</a>
                            <td>
                            <form action="{{ route('padretema.destroy', $fatherTopic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

</body>
</html>