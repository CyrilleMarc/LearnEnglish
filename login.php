<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <form method="POST">
            <h1>LOGIN</h1>
            <input type="email" value="" name="email" placeholder="email" />
            <input type="password" value="" name="password" placeholder="password" />
            <button onclick="" type="submit">Submit</button>
            <a href="/signup.php">Create an account</a>
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

    .login {
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

    .login a {
        /* text-decoration: none; */
        color: greenyellow;
        margin: 0px auto;

    }

    .login input {
        width: 90%;
        height: 30px;
        margin: 5px auto;
        border: 1px solid greenyellow;
        border-radius: 10px;
        padding: 5px;
    }

    .login button {
        width: 30%;
        height: 30px;
        margin: 15px auto;
        border: 1px solid greenyellow;
        border-radius: 10px;
        padding: 5px;
    }

    .login button:hover {
        cursor: pointer;
        background-color: greenyellow
    }
</style>

</html>