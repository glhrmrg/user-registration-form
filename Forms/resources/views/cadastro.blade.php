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

.data-container {
    min-height: 400px;
    width: 300px;
    background-color: beige;
    box-sizing: border-box;
    padding: 32px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.label {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

input {
    border-radius: 5px;
    width: 130%;
    border: none;
    outline: none;
}

button {
    border-radius: 5px;
    outline: none;
    border: none;
    background-color: white;
    margin: 5px;
}

a {
    text-decoration: none;
    color: black;
}</style>
    <title>Cadastro</title>
</head>
<body>

<div class = "main-container">
<h1>Formulário de Cadastro</h1>
<div class = "data-container">
<form action="{{route('user.store')}}" method: "POST">
    @csrf

    <div class = "label">
    <label>Nome:</label>
    <input type="text" name="name">
    <br>

    <label>E-mail:</label>
    <input type="email" name="email">
    <br>

    <label>CPF:</label>
    <input type="text" name="cpf">
    <br>

    <label>Função:</label>
    <input type="text" name="funcao">
    <br>

    <label>Status (Ativo ou Inativo):</label>
    <input type="text" name="status">
    <br>

    <button type ="submit">Cadastrar</button>
    <button><a href="{{route('user.lista')}}">Bolsistas cadastrados</a></button>
    
</div>    
</div>
</form>
</div>


</body>
</html>