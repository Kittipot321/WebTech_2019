<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .font {
        font-size: 30pt;
    }
</style>
<body>
    <h1>num</h1>
    <hr>
    <form action="" method="post">
        <select name="amount" id="">
            <option value="0">0-100</option>
            <option value="101">101-1000</option>
            <option value="1001">1001-10000</option>
        </select>
        <input type="submit" value="Result!">
    </form>
    <?php
    $sel = $_POST["amount"];
    $data = [20, 100, 199, 57, 82, 1000, 101, 0,1004,9999];
    echo "<div class='font'>";
    for ($i = 0; $i < count($data); $i++) {
        if ($sel == 0 && $data[$i] <= 100) {
            echo $data[$i] . " ";
        } else if ($sel == 101 && ($data[$i] <= 1000 && $data[$i] >= 101)) {
            echo $data[$i] . " ";
        } else if ($sel == 1001 && ($data[$i] <= 10000 && $data[$i] >= 1001)) {
            echo $data[$i] . " "; 
        }
    }
    echo "</div>";
    ?>
</body>

</html>