<?php
// inclure le fichier function.php
require_once "./function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>

<body>
    <div class="signup">
        <h1>SIGN UP</h1>
        <form action="/function.php" method="POST">
            <input type="email" value="" name="email" placeholder="email" />
            <input type="password" value="" name="password" placeholder="password" />
            <?php if ($message === true) : ?>
                <p id="succesUser">User added successfully</p>
            <?php endif; ?>

            <?php if ($errorMessage === true) : ?>
                <p>Sorry we encountered an error, you need to start over</p>
            <?php endif; ?>
            <button value="submit" type="submit">Submit</button>
            <a href=" /login.php">I already have an account</a>
        </form>
    </div>
</body>
<style>
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
    }

    h1 {
        text-align: center;
        color: greenyellow;
        margin: 0px 0px 20px;
    }

    .signup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 3px solid greenyellow;
        border-radius: 10px;
        padding: 20px;
        width: 50%;
        margin: 15% auto;
    }

    .signup a {
        /* text-decoration: none; */
        color: greenyellow;
        margin: 0px auto;

    }

    .signup input {
        width: 90%;
        height: 30px;
        margin: 5px auto;
        border: 1px solid greenyellow;
        border-radius: 10px;
        padding: 5px;
    }

    .signup button {
        width: 30%;
        height: 30px;
        margin: 15px auto;
        border: 1px solid greenyellow;
        border-radius: 10px;
        padding: 5px;
    }

    .signup button:hover {
        cursor: pointer;
        background-color: greenyellow
    }

    #succesUser {
        color: green;
        margin: 0px auto;
        padding: 5px;
    }
</style>

</html>