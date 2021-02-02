<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <h1>Inserimento</h1>
        <form action="/create" method="post">
          @csrf
          <input type="text" placeholder="nome" name="name">
          <input type="submit" value="inserisci">
        </form>

        <h1>Aggiornamento</h1>
        <form action="/update" method="post">
          @csrf
          <input type="number" placeholder="id da modificare" name="id">
          <input type="text" placeholder="nuovo nome" name="newname">
          <input type="submit" value="aggiorna">
        </form>

        <h1>Eliminazione</h1>
        <form action="/delete" method="post">
           @csrf
          <input type="number" placeholder="id" name="id">
          <input type="submit" value="elimina">
        </form>

        <h1>Lettura</h1>
        <?php foreach ($listanegozi as $key => $negoziox): ?>
          {{$negoziox->name}}
        <?php endforeach; ?>

    </head>
    <body class="antialiased">

    </body>
</html>
