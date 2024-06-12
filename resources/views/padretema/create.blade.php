<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>padretema</h1>

<form action="{{route('padretema.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    llave foranea id del padre:
    <br>
    <input type="number" name="fk_id_padre">
</label>
<br>
<label>
    llave foranea id de tema:
    <br>
    <input type="number" name="fk_id_tema">
</label>
<br>
<label>
    Descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br>
<button type="submit">Guardar</button>

</body>
</form>
</html>