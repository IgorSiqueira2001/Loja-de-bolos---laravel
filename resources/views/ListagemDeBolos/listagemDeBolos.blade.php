<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/resources/css/app.css">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Usuário</title>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1500px;
            margin: 0 auto;
        }

        .card {
            margin-top: 100px;
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            text-align: center;
            opacity: 0;
            animation: fadeInUp 0.5s ease-out forwards;
        }

        .card:hover {
            transform: scale(1.05);
        }

        button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    @include('welcome')

    <div class="grid-container">
        @foreach ($cakes as $index => $c)
        <div class="card" style="animation-delay: {{ 0.1 + ($index * 0.1) }}s">
            <form action="{{ route('cakes.destroy', $c->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <p><strong>Bolo:</strong> {{ $c->name }}</p>
                <p><strong>Preço:</strong> R$ {{ number_format($c->price, 2, ',', '.') }}</p>
                <a href="{{ route('cakes.destroy', $c->id) }}"><button type="submit">Deletar</button></a>
                <a href="{{ route('cakes.update', $c->id) }}" class="btn btn-warning">Editar</a>
            </form>
        </div>
        @endforeach
    </div>
</body>
</html>
