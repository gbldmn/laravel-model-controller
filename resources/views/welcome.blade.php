<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="container">

<h1>{{ $title }}</h1>
    <div class="row">
        @foreach($movie as $elem)
       <div class="card col-3 ms-2 mt-2" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{ $elem['title'] }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">titolo originario: {{ $elem['original_title'] }}</h6>
        <p class="card-text">Nazionalità: {{ $elem['nationality'] }}</p>
        <p class="card-link">Data: {{ $elem['date'] }}</p>
        <p class="card-link">Voto: {{ $elem['vote'] }}</p>
       </div>
      
    </div>
    
 
   @endforeach





</body>

</html>