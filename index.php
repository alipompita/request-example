<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
</head>

<body>

    <h3>GET Method</h3>
    <hr>
    <form action="hello.php" method="GET">
        <label for="nameInput">What is your name? </label>
        <input id="nameInput" type="text" name="name">
        <br>
        <label for="age">How old are you? (years) </label>
        <input id="age" type="number" name="age">
        <br>
        <input type="submit">
    </form>

    <h3>POST Method</h3>
    <hr>
    <form action="hello.php" method="POST">
        <label for="nameInput">What is your name? </label>
        <input id="nameInput" type="text" name="name">
        <br>
        <label for="age">How old are you? (years) </label>
        <input id="age" type="number" name="age">
        <br>
        <input type="submit">
    </form>
</body>

</html>