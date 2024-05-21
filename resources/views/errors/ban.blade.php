<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oups ! Tu as été {{ $ban->end_at ? '' : 'définitivement'  }} banni</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 10px;
        }

        .expiration {
            font-weight: bold;
            color: #ff5722; /* Red color */
        }

        .message {
            font-style: italic;
            color: #2196f3; /* Blue color */
        }
    </style>
</head>
<body>
<div class="logo-container">
    <img class="logo" src="{{ asset('images/logo-small.png') }}" alt="Logo">
</div>
<div class="container">
    <h1>Oups ! Tu as été {{ $ban->end_at ? '' : 'définitivement' }} banni</h1>
    <p>Il semble que ton adresse IP ait été {{ $ban->end_at ? '' : 'définitivement' }} bannie d'accéder à ce site. Pas de panique, cela arrive parfois !</p>
    @if ($ban->message)
        <p class="message">Raison : {{ $ban->message }}</p>
    @endif
    @if ($ban->end_at)
        <p>L'interdiction expire le : <span class="expiration">{{ $ban->end_at->format('d/m/Y à H:i:s') }}</span></p>
    @endif
    <p>Si tu penses que c'est une erreur ou si tu as des questions, n'hésite pas à contacter l'équipe directement.</p>
</div>
</body>
</html>
