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

        p {
            margin-bottom: 10px; 
        }
    </style>
</head>
<body>
    <h1>Mostrar Padre</h1>

    <p>ID: {{ $father->id }}</p>
    <p>Nombre: {{ $father->nombre_padre }}</p>
    <p>Apellido: {{ $father->apellido_padre }}</p>
    <p>Edad: {{ $father->edad_padre }}</p>
    <p>Gmail: {{ $father->gmail_padre }}</p>
    <p>tiempo de uso: {{ $father->tiempo_uso }}</p>
</body>
</html>
