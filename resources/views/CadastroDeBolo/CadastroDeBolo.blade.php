<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Bolo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card-cadastro {
            background-color: #fff;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            animation: fadeIn 0.5s ease-in-out;
        }

        .card-cadastro h2 {
            margin-bottom: 1.5rem;
            font-weight: 600;
            color: #333;
        }

        .form-group {
            margin-bottom: 1.2rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: 0.3s ease;
        }

        .form-group input:focus {
            border-color: #00bcd4;
            outline: none;
        }

        .btn-submit {
            background-color: #00bcd4;
            color: white;
            border: none;
            padding: 0.9rem 1.2rem;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0097a7;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <form action="{{ isset($cake) ? route('cakes.update', $cake->id) : route('cake.create') }}" method="POST">
        @csrf
        @include('welcome')
        @if(isset($cake))
            @method("PUT");
            
        @endif
        <div class="card-cadastro">
            <h2>Cadastro de Bolo 🎂</h2>

            <div class="form-group">
                <label for="name">Nome do bolo:</label>
                <input type="text" id="name" name="name" placeholder="Ex: Bolo de Chocolate" required value="{{ old('name', $cake->name ?? '') }}">
                @error('name')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Preço do bolo:</label>
                <input type="text" id="price" name="price" placeholder="Ex: 12.99" required value="{{ old('price', $cake->price ?? '') }}">
                @error('price')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <x-alert type="success" />
            <x-alert type="error" />
            <x-alert type="warning" />
            <x-alert type="info" />            
            <button type="submit" class="btn-submit">Cadastrar</button>
        </div>
    </form>
</body>
</html>
