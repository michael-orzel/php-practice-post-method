<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="site.php" method="post">
            Password: <input type="password" name="password"> <br>
            <input type="submit">
        </form>
        <br><br>

        <?php
            echo $_POST["password"];
        ?>
    </body>
</html>
