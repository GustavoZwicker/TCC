<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="adduni" method="POST">
        @csrf
            <h1>Add Universidade<h1>
                <input type="text" name="name" placeholder="Nome"><br><br>
                <input type="text" name="initials" placeholder="Siglas"><br><br>
                <input type="text" name="site" placeholder="Link do site"><br><br>
                <input type="text" name="local" placeholder="Localidade"><br><br>
                <input type="text" name="logo" placeholder="Path da logo"><br><br>
                <input type="text" name="edict" placeholder="Path do Edital"><br><br>
                <input type="submit" value="Submit">
    </form>
</body>
</html>