<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div id="table"></div>

    <form action="jqueryAjaxTable.php" method="post">
        Dátum: <input type="text" name="date"><br>
        d1: <input type="text" name="d1"><br>
        d2: <input type="text" name="d2"><br>
        <input type="submit">
    </form>

    

    <?php

    function tableScript() {
    echo "<script>
            function getData(data) {
                var allRows = data.split(/\r?\n|\r/);
                var table = \"<table>\";
                for (var singleRow = 0; singleRow < allRows.length; singleRow++) {
                    if (singleRow == 0) {
                        table += \"<thead>\";
                        table += \"<tr>\";
                    } else {
                        table += \"<tr>\";
                    }
                    var rowCells = allRows[singleRow].split(';');
                    for (var rowSingleCell = 0; rowSingleCell < rowCells.length; rowSingleCell++) {
                        if (singleRow === 0) {
                            table += \"<th>\";
                            table += rowCells[rowSingleCell];
                            table += \"</th>\";
                        } else {
                            table += \"<td>\";
                            table += rowCells[rowSingleCell];
                            table += \"</td>\";
                        }
                    }
                    if (singleRow == 0) {
                        table += \"</tr>\";
                        table += \"</thead>\";
                        table += \"<tbody>\";
                    } else {
                        table += \"</tr>\";
                    }
                }
                table += \"</tbody>\";
                table += \"</table>\";
                $(\"#table\").append(table);
            }

            $.ajax({
                url: \"data.csv\",
                dataType: \"text\"
            }).done(getData);
        </script>";
    }

        tableScript();
/*
    if (isset($_REQUEST['date']))
    {
        $date = $_POST["date"];
        $d1 = $_POST["d1"];
        $d2 = $_POST["d2"];

        $myfile = fopen("data.csv", "w") or die("Unable to open file!");
        $txt = $myfile."\n".$date.";".$d1.";".$d2;
        fwrite($myfile, $txt);
        fclose($myfile);
        tableScript();
    } else {

        tableScript();
    }
*/

    ?>



</body>

</html>