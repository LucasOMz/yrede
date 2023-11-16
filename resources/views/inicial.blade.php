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

        <h1 class="text-3xl font-bold mb-4">Bem-vindo ao Meu Site</h1>

        <nav class="mb-8">
            <ul>
                <li class="mb-2">
                    <a href="/cadastra-usuario" class="btn rounded-full bg-blue-500 hover:bg-blue-300 transition-all px-4 py-2">Criar Conta</a>
                </li> <br>
                
                <li class="mb-2">
                    <a href="/login" class="btn rounded-full bg-blue-500 hover:bg-blue-300 transition-all px-4 py-2">Faça Login</a>
                </li> <br>
                
                <li class="mb-2">
                    <a href="/cria-post" class="btn rounded-full bg-blue-500 hover:bg-blue-300 transition-all px-4 py-2">Nova Postagem</a>
                </li> <br>
            </ul>
        </nav>

    </div>

    <h1>Posts:</h1>
    <h1>___________________________________________________________________________________________________________</h1>

@foreach ($posts as $post)
    <div>
        <div>
            Postagem - {{$post->id}}
        </div>
{{$post->mensagem}}
    </div>

    <h1>____________________________________________________________________________________________________________</h1>

@endforeach

</body>
</html>


