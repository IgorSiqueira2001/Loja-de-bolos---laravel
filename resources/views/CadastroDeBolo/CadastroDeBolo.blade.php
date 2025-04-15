<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/resources/css/app.css">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Usuário</title>
</head>
<body>
    <form action="/cadastroBolo" method="POST">
        @csrf
        @include('welcome')

        <label for="nome">Digite o nome do bolo:</label>
        <input type="text" name="name"/>

        <label for="idade">Digite o preço do bolo</label>
        <input type="number" name="price"/>

        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>