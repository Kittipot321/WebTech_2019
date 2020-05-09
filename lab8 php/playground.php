<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .text{
        font-size: 100pt;
    }
</style>
<body>
    <div class="container">
    <center>
    <h2>My profile</h2>
    <hr>
    <form action="" method="post">
    <select name="function">
        <option value="0">Name</option>
        <option value="1">Age</option>
        <option value="2">Phonenumber</option>
        <option value="3">Gender</option>
    </select>
    <input type="submit" value="View" class="btn btn-outline-danger">
    </form>
    <?php
        $url = "person.json";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $data = array($result[0]->firstName." ".$result[0]->lastName,$result[0]->age,$result[0]->phoneNumber[1]->type." ".$result[0]->phoneNumber[1]->number,$result[0]->gender->type);
        $select = $_POST["function"];
        echo "<p class = 'text'>".$data[$select]."</p>";
    ?>
    
    <!--table multiplication-->
    <table class="table table-bordered">
    <?php
    echo "<th class='bg-secondary'>"."x"."</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<th class='bg-secondary'>".$i."</th>";
    }
    echo "<tr>";
    echo "<th class='bg-secondary'>1</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*1)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>2</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*2)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>3</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*3)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>4</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*4)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>5</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*5)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>6</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*6)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>7</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*7)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>8</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*8)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>9</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*9)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>10</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*10)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>11</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*11)."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<th class='bg-secondary'>12</th>";
    for($i = 1;$i <= 12;$i++){
        echo "<td>".($i*12)."</td>";
    }
    echo "</tr>";

    ?>
    </table>
    </center>
    </div>
</body>
</html>