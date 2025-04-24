<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="/resources/css/app.css">
  <title>Document</title>
</head>
<body>
  <header>
    <h2 class="logo">Cake Store</h2>
    <nav class="navigation">
        <a href="{{ route('cake.create') }}">Cadastro de Bolo</a>
        <a href="{{ route('cakes.list') }}">Cardápio</a>
        <a href="#">Venda</a>
        <button class="btnLogin-popup">Login</button>
    </nav>
  </header>
</body>
</html>