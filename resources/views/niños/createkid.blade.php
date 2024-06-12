<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #FFD166; 
            font-family: 'Happy Monkey', cursive; 
        }

        form {
            max-width: 400px; 
            margin: 0 auto; 
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

        button {
            background-color: #EF476F; 
            color: #fff; 
            cursor: pointer; 
        }

        button:hover {
            background-color: #d73858; 
        }
    </style>
</head>
<body>

<h1>KID</h1>

<form action="{{ route('niños.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>
        Nombre de niño:
        <br>
        <input type="text" name="nombre">
    </label>
    <br>
    <label>
        Apellido de niño:
        <br>
        <input type="text" name="apellido">
    </label>
    <br>
    <label>
        Edad de niño:
        <br>
        <input type="number" name="edad">
    </label>
    <br>
    <label>
        Nickname de niño:
        <br>
        <input type="text" name="nickname">
    </label>
    <br>
    <label>
        avatar:
        <br>
        <input type="text" name="avatar">
    </label>
    <br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>

