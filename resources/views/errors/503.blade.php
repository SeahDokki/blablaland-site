<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blablaland, Tchat gratuit, jeu virtuel et tchat pour ado</title>
    </head>
    <body>
        <div id="main">
            <img src="{{ asset('images/maintenance.png') }}">
            <div id="maintenance"></div>
            <div id="discord">
                <a href="https://discord.gg/fAH3xJCzD3" target="_blank">Rejoins notre Discord en cliquant ici</a>
            </div>
            <div style="font-size:10px">
                Si vous tombez sur cette page alors que le site n'est plus en maintenance, veuillez vider votre cache.<br>
            </div>
            <script>
                setTimeout(function () {
                    document.getElementById("maintenance").innerHTML = '<a href="/" style="font-size:18px">Clique ici pour voir si Blablaland est de retour</a><br />Si c\'est toujours en maintenance, tu retomberas sur cette page<br><br>';
                }, 10000)
            </script>
        </div>
        <style>
            body {
                font-family: Verdana, Geneva, sans-serif;
                font-size: 12px;
                color: #FFFFFF;
                background-color: #65c3ff;
            }
            #main {
                width: 650px;
                margin: auto;
                text-align: center;
            }
            #discord {
                font-size: 20px;
                font-weight: bold;
            }
            a {
                color:#fff500;
                text-decoration:none;
            }
            a:hover {
                text-decoration:underline;
            }
        </style>
    </body>
</html>
