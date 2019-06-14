<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="inputText.php" method="get">
        kulcs: <input type="text" name="key"><br>
        érték: <input type="text" name="value"><br>
        <input type="submit">

        <?php if(isset($_GET["key"])) echo "kulcs: ".$_GET["key"]." érték: ".$_GET["value"]; ?>
    </form>
</body>

</html>