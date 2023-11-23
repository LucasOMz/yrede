<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" p-8">

<label class="flex cursor-pointer gap-2">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"/></svg>
  <input type="checkbox" value="synthwave" class="toggle theme-controller"/>
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
</label>

<div class="">

    <div class="max-w-xl mx-auto">

        <h1 class="text-3xl font-bold mb-4">Bem-vindo a página inicial</h1>

        

        <nav class="mb-8">
            <ul class="flex space-x-4">
                <li><a href="/cadastra-usuario" class="px-4 py-2 rounded-full bg-blue-500 hover:bg-blue-300 transition-all">Criar Conta</a></li>
                
                <li><a href="/login" class="px-4 py-2 rounded-full bg-blue-500 hover:bg-blue-300 transition-all">Faça Login</a></li>
        
                <li><a href="/cria-post" class="px-4 py-2 rounded-full bg-blue-500 hover:bg-blue-300 transition-all">Nova Postagem</a></li>
            </ul>
        </nav>

    </div>

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


