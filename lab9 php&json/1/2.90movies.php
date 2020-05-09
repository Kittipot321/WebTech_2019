<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>2</title>
</head>
<style>
    .container-fluid{
        padding: 2% 10% 2% 10%;
    }
</style>
<body>
    <center class="bg-primary text-white">
        <h1>90's Movies</h1>
    </center>
    <div class="bg-dark text-white">
        <div class="container-fluid">
            <div class="col">
                <?php $url = "http://10.0.15.12/lab9/restapis/movies90";
                $response = file_get_contents($url);
                $result = json_decode($response);
                for ($i = 0; $i < count($result); $i++) {
                    echo "<div class='border border-white'>" . ($i + 1) . ". <b>" . $result[$i]->title . "</b> (" . $result[$i]->year . ")<br><b>Cast : </b>";
                    for ($j = 0; $j < count($result[$i]->cast); $j++) {
                        echo ($j+1)."." . $result[$i]->cast[$j] . " ";
                    }
                    echo "<br><b>Genres : </b>";
                    for ($k = 0; $k < count($result[$i]->genres); $k++)
                        echo ($k+1)."." . $result[$i]->genres[$k] . " ";
                    echo "<br> </div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>