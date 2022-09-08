<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Bolsistas</title>
    <style> 
    @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');

body {
    font-family: 'Raleway', sans-serif;
    margin: 0;
    padding: 0;
}

h1 {
    color: white;
}

.main-container {
    height: 100vh;
    background-image: linear-gradient(50deg, #FFB88E, #EA5753);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

a {
    text-decoration: none;
    color: black;
}

button {
    border-radius: 5px;
    outline: none;
    border: none;
    background-color: white;
    margin: 5px;
}

td {
    color: white;
}
    </style>
</head>
<body>
<div class = "main-container">
<h1>Usuários cadastrados</h1>
<table>
    <thead>
        <tr>
            <td>Bolsistas: </td>
            
        </tr>
    </thead>

    <tbody>

        @foreach($users as $user)
        <tr>
            <td>{{$user->name}} </td>
        </tr>

        @endforeach

    </tbody>
</table>

<button><a href="{{route('user.detalhes')}}">Detalhes</a></button>

</div>
</body>
</html>
