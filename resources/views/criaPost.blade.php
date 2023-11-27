<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova postagem</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1a202c; /* Dark blue-gray background color */
            color: #cbd5e0; /* Light gray text color */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        div {
            background-color: #2c3e50; /* Darker blue for the header */
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #2c3e50; /* Darker blue background */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center the button */
        }

        textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            box-sizing: border-box;
            background-color: #425a70; /* Darker, muted blue for the textarea background */
            border: 1px solid #4a5568; /* Lighter gray border */
            border-radius: 6px;
            resize: none;
            font-size: 16px;
            color: #cbd5e0; /* Light gray text color for textarea */
        }

        button {
            background-color: #2ecc71; /* Green for the button */
            color: #ffffff;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #27ae60; /* Darker green on hover */
        }
    </style>
</head>
<body>
    

    <div>Nova postagem</div>
    <p>Clique aqui para ir ao <a href="/" class="font-medium text-primary-600 hover:underline dark:text-primary-500">INÍCIO</a></p>

    <form action="/salva-post" method="POST">

        @csrf

        <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>

        <button type="submit">Postar</button>

    </form>
    
</body>
</html>
