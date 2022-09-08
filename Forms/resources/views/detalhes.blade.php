<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>@import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');

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
}</style>
    <title>Detalhes</title>
</head>
<body>
<div class = "main-container">
<h1>Detalhes do bolsista</h1>

<table>
    
    <thead>
        <tr>
            <td>Nome </td>
            <td>CPF </td>
            <td>E-mail </td>
            <td>Função </td>
            <td>Status </td>
            <td> </td>
            
        </tr>
    </thead>

    <tbody>

        @foreach($users as $user)
        <tr>
            <td>{{$user->name}} </td>
            <td>{{$user->cpf}} </td>
            <td>{{$user->email}}</td>
            <td>{{$user->funcao}}</td>
            <td>{{$user->status}}</td>
            <td>
                <a href='/usuarios/del/{{$user->id}}' onclick = "return confirm('Deseja mesmo remover esse bolsista?')"> Remover </a>
                </form>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

<button><a href="{{route('user.cadastro')}}">Cadastrar novo bolsista</a></button>
</div>
</body>
</html>

