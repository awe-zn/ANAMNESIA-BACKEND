<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANAMNÉSIA</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
        }

        p {
            position: relative;
            font-family: sans-serif;
            text-transform: uppercase;
            font-size: 5em; 
            letter-spacing: 4px;
            overflow: hidden;
            background: linear-gradient(90deg, #2E6A9B, #F3961C, #2E6A9B); 
            background-repeat: no-repeat;
            background-size: 80%;
            animation: animate 3s linear infinite; 
            -webkit-background-clip: text;
            -webkit-text-fill-color: rgba(255, 255, 255, 0);
        }

        @keyframes animate {
            0% {
                background-position: -500%;
            }
            100% {
                background-position: 500%;
            }
        }
    </style>
</head>
<body>
    <p> ANAMNÉSIA </p>
</body>
</html>
