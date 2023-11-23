<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-200 p-8">

    <div class="max-w-xl mx-auto">

        <h1 class="text-3xl font-bold mb-4">Bem-vindo a página inicial</h1>

        <nav class="mb-8">
        <ul class="flex space-x-4">
    <li>
        <a href="/cadastra-usuario" class="px-4 py-2 rounded-full bg-blue-500 hover:bg-blue-300 transition-all">Criar Conta</a>
    </li>
    
    <li>
        <a href="/login" class="px-4 py-2 rounded-full bg-blue-500 hover:bg-blue-300 transition-all">Faça Login</a>
    </li>
    
    <li>
        <a href="/cria-post" class="px-4 py-2 rounded-full bg-blue-500 hover:bg-blue-300 transition-all">Nova Postagem</a>
    </li>
</ul>

        </nav>

    </div>

    <h1>Posts:</h1>

@foreach ($posts as $post)
    <div class="border border-black rounded p-4 mb-4">
        <div>
            Postagem - {{ $post->user->usuario }}
        </div>
        <div>
            {{ $post->mensagem }}
        </div>
    </div>
@endforeach

</body>
</html>


