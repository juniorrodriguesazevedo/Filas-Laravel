<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
</head>
<body>
    <main>
        Olá <strong>{{ $contact->name }}</strong>! Você chegou até aqui. <br><br>

        <strong>Email: </strong> {{ $contact->email }} <br><br>
        <strong>Descrição: </strong> {{ $contact->description }} <br><br>

        <img src="https://i.pinimg.com/originals/c5/59/89/c5598903f2d51d71622f255b9eb34fc7.gif" alt="Bart">
    </main>
</body>
</html>