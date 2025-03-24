<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1>Nuovo Messaggio dal form di contatto !</h1>

    <h2>Nome : {{ $contactMail['name'] }}</h2>

    <h2>Email : {{ $contactMail['email'] }}</h2>

    <h2>Messaggio : {{ $contactMail['description'] }}</h2>

</body>

</html>
