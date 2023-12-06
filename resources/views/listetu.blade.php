<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Liste des Etudiants</title>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Liste Des Etudiants</h1>
</div>
    <table class="table table-bordered table-hover">
        <thead class="bg-secondary">
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </thead>
        <tbody>
        @foreach ($list as $etu)
            <tr>
                <td>{{$etu->nom}}</td>
                <td>{{$etu->prenom}}</td>
                <td>{{$etu->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>