<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php include '/views/header.php' ?>

    <form action="home.php" method="post">
        <label for="name"></label>
        <input type="text" placeholder="Enter you're username" maxlength="20" minlength="10">
        <label for="password"></label>
        <input type="password" name="password" placeholder="Enter you're password" maxlength="50" minlength="10">
        <input type="submit" value="Login">
    </form>

    <?php include '/views/footer.php' ?>

</body>

</html>