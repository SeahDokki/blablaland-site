<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmez votre adresse e-mail</title>
    <style>
        /* Styles reset */
        body, h1, p, a {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f9f9f9;
        }

        .logo-container {
            margin-bottom: 20px;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px; /* Ajout de cette ligne */
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
            text-align: left;
            padding: 0 10px;
        }

        .verify-link {
            display: block;
            width: 100%;
            background-color: #F50085FF; /* Pink color */
            color: #fff;
            padding: 15px 0; /* Increased padding */
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            margin-top: 20px;
        }

        .verify-link:hover {
            background-color: #0056b3; /* Darker blue color */
        }
    </style>
</head>
<body>
<div class="logo-container">
    <img class="logo" src="{{ asset('images/logo-small.png') }}" alt="Logo">
</div>
<div class="container">
    <h1>Vérification d'adresse e-mail</h1>
    <p>Bonjour <strong>{{ $user->username }}</strong>,</p>
    <p>Merci d'avoir créé un compte ! Avant de pouvoir accéder à toutes les fonctionnalités, nous devons vérifier votre adresse e-mail.</p>
    <p>Pour confirmer votre adresse e-mail, veuillez cliquer sur le lien ci-dessous :</p>
    <a href="{{ $action }}" class="verify-link">Confirmer l'adresse e-mail</a>
    <p>Si vous avez des questions ou besoin d'aide, n'hésitez pas à nous contacter directement. Nous sommes là pour vous aider.</p>
    <p>Merci,</p>
    <p>Bon blabla !</p>
</div>
</body>
</html>
