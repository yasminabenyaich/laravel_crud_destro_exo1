<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personnes</title>
</head>
<body>
    <h1>Users</h1>
    @foreach ($personnes as $personne)
        <p>{{ $personne->nom}}</p>
        <p>{{ $personne->prenom }}</p>
        <p>{{ $personne->ddn }}</p>
        <p>{{ $personne->age}}</p>
        <p>{{ $personne->age}}</p>
        <p>{{ $personne->date }}</p>
            
        
    @endforeach
</body>
</html>