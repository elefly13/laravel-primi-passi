<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel primi passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
         main {
             width: 100%;
             height: 100%;
             text-align: center;
         }
         h1 {
             font-size: 30px;
         }
         h3 {
             font-size: 20px;
         }
        </style>
    </head>
    <body>

   <header>

   </header>
   <main>
       <h1>{{ $titolo }}</h1>
       <h3>{{ $sottotitolo }}</h3>
       <p>{{ $paragrafo }}</p>
   </main>



        

       
    </body>
</html>
