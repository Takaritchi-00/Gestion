<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Liste des Formations</title>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Liste Des Formations</h1>
</div>
    <table class="table table-bordered table-hover">
        <thead class="bg-secondary">
            <th>Nom De La Formation</th>
            <th>Chef du Département</th>
        </thead>
        <tbody>
        @foreach ($liste as $form)
            <tr>
                <td>{{$form->nom}}</td>
                <td>{{$form->gerant}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>