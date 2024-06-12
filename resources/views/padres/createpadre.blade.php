<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'Happy Monkey', cursive; 
            background-color: #FFD166; 
            text-align: center; 
        }

        h1 {
            color: #333; 
            margin-bottom: 20px; 
        }

        form {
            max-width: 400px; 
            margin: 0 auto; 
            background-color: #fff; 
            padding: 20px; 
            border-radius: 20px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        label {
            display: block; 
            margin-bottom: 15px; 
        }

        input[type="text"],
        input[type="number"],
        button {
            width: 100%; 
            padding: 10px; 
            margin-bottom: 15px; 
            border: 2px solid #fff;
            border-radius: 20px; 
            box-sizing: border-box;
            background-color: #fff; 
            font-family: 'Happy Monkey', cursive; 
        }

        button[type="submit"] {
            background-color: #EF476F; 
            color: #fff; 
            cursor: pointer; 
            transition: background-color 0.3s; 
        }

        button[type="submit"]:hover {
            background-color: #d73858;
        }
    </style>
</head>
<body>

<h1>Fathers</h1>

<form action="{{ route('padres.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <label>
        Nombre de padre:
        <br>
        <input type="text" name="nombre_padre">
    </label>
    <br>
    <label>
        Apellido de padre:
        <br>
        <input type="text" name="apellido_padre">
    </label>
    <br>
    <label>
        Edad de padre:
        <br>
        <input type="number" name="edad_padre">
    </label>
    <br>
    <label>
        Gmail de padre:
        <br>
        <input type="text" name="gmail_padre">
    </label>
    <br>
    <label>
        Tiempo de uso:
        <br>
        <input type="number" name="Tiempo_uso">
    </label>
    <br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>