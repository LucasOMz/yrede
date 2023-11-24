<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova postagem</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        div {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 6px;
            resize: none;
            font-size: 16px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div>Nova postagem</div>

    <form action="/salva-post" method="POST">

        @csrf

        <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>

        <button type="submit">Postar</button>

    </form>
    
</body>
</html>
