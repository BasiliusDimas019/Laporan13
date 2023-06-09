<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .container p {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .container label {
            flex: 0 0 100px;
            /* Adjust the width as needed */
            margin-right: 1px;
            /* Adjust the spacing between label and input */
        }
    </style>
    <div class="container">
        <form action="/login/check" method="post">
            <?= csrf_field() ?>
            <p>
                <label for="name">User</label>
                <input type="text" name="usr" />
            </p>
            <p>
                <label for="name"> Password</label>
                <input type="password" name="pwd" />
            </p>
            <input type="submit" name="submit" value="login" />
        </form>
    </div>
</body>

</html>