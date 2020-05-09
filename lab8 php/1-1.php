<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kanit:200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>1</title>
</head>
<style>
    body {
        text-align: center;
        font-family: 'Kanit', sans-serif;
    }

    hr {
        max-width: 15%;
    }
</style>

<body>
    <form method="post" action="1-1.php">
        <label>กรอกสูตรคูณ : </label>
        <input type="text" name="number" id="number" placeholder="ตัวเลข">

        <input type="submit" value="แสดงตาราง">
    </form>
    <?php
    $text = $_POST["number"];
    echo "<h1>ตารางสูตรคูณแม่ " . $text . "</h1>";
    for ($i = 0; $i < 12; $i++) {
        echo $text . " X " . ($i + 1) . " = " . ($text * ($i + 1)) . "<br>";
        echo "<hr color='black'>";
    }
    ?>
</body>

</html>