<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>2</title>
</head>
<body>
    <?php
        $day = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
        echo "<h1>April 2019</h1><hr>";
        echo "<center class='container'><table border='3' class='table table-bordered-md text-center'><tr>";
        for($i = 0;$i < 7;$i++){
            echo "<th scope='col' class='table-primary'>".$day[$i]."</th>";
        }
        echo "<tr>";
        for($i = 0;$i < 7;$i++){
            if ($i < 1){
                echo "<td>  </td>";
            }
            else{
                echo "<td>".($i)."</td>";
            }
        }
        echo "<tr>";
        for($i = 0;$i < 7;$i++){
            echo "<td>".($i+7)."</td>";
        }
        echo "<tr>";
        for($i = 0;$i < 7;$i++){
            echo "<td>".($i+14)."</td>";
        }
        echo "<tr>";
        for($i = 0;$i < 7;$i++){
            echo "<td>".($i+21)."</td>";
        }
        echo "<tr>";
        for($i = 0;$i < 7;$i++){
            if ($i > 2){
                echo "<td>  </td>";
            }
            else{
                echo "<td>".($i+28)."</td>";
            }
        }
        echo "</tr></tr></tr></tr></tr></tr></table></center>";
    ?>
</body>
</html>