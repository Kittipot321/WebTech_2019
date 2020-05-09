<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>3</title>
    <style>
        .pic {
            max-width: 20%;
            max-height: 20%;
            display: block;
            float: right;
            margin-left: 5%;
            margin-right: 15%;
            border: 1px solid black;
        }
        hr{
            max-width: 50%;
        }
    </style>
</head>

<body>
    <center>
        <div class="container-fluid font-weight-bold">
            <h1>10 countries</h1>
            <hr class="bg-danger">
            <?php $url = "http://10.0.15.12/lab9/restapis/10countries";
            $response = file_get_contents($url);
            $result = json_decode($response);
            for ($i = 0; $i < count($result); $i++) {
                echo "<img src=".$result[$i]->flag." class='pic'><br>";
                echo "Name : <b>" . $result[$i]->name . "</b> <br>";
                echo "Capital : " . $result[$i]->capital . " <br>";
                echo "Population : " . $result[$i]->population . " <br>";
                echo "Region : " . $result[$i]->region . " <br>Location : ";
                for ($j = 0; $j < count($result[$i]->latlng); $j++) {
                    echo $result[$i]->latlng[$j] . " ";
                }
                echo "<br>Borders : ";
                for ($k = 0; $k < count($result[$i]->borders); $k++) {
                    echo $result[$i]->borders[$k] . " ";
                }
                echo "<br><br>";
            }
            ?>
        </div>
    </center>
</body>

</html>