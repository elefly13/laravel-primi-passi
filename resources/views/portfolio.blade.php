<!DOCTYPE html>
<html lang="en">
<style>
        * {
            margin: 0;
            pad: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Nunito,Helvetica Neue,Helvetica,Arial,sans-serif;
            
        }
        /* inizio header  */
        .menu-container{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            text-align: center;
            background-color: darkslategrey;
            z-index: 999;
        }
        nav {
            width: 100%;
            height: 100%;
            line-height: 80px;
            margin: 0 auto;
        }
        .button ul {
            /* position: relative; */
            width: 100%;
        }
        .button li {
            display: inline-block;
        }
        .button ul li:hover {
            text-decoration: underline;
        }
        a {
            color: white;
            text-decoration: none;
            padding: 0 10px;
        }
        main {
            width: 100%;
            height: 100%;
            text-align: center;
            margin-top: 300px;
        }
        h1 {
            font-size: 30px;
        }
        h3 {
            font-size: 20px;
        }
        </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="menu-container">
            <nav class="button">
                <ul>
                <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('noi') }}">Su di noi</a></li>
                    <li><a href="{{ route('lavori') }}">Portfolio</a></li>
                    <li><a href="{{ route('indirizzo') }}">Contatti</a></li>
                </ul>
            </nav> 
        </div>
    </header>
    <main>
        <h1>Portfolio</h1>
    </main>
</body>
</html>