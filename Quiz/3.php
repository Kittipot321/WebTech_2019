<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    .col-md-3 {
        padding-bottom: 39%;
        background-color: hsl(255, 0%, 70%);
    }

    .col-md {
        background-color: hsl(255, 0%, 80%);
    }

    img {
        max-height: 100%;
        max-width: 100%;
    }
    .obj{
        margin-left: 20%;
        margin-right: 20%;
        margin-top:2%;
        border: 2px solid transparent;
        border-radius: 10px;
        padding:4% 4% 4% 4%;
        background-color: white;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h1 class="text-white">Kittipot's gallery</h1>
                <form action="" method="post">
                    <select name="sel" id="" class="form-control" onchange="">
                        <option value="0">Mona Lisa</option>
                        <option value="1">Starry Night</option>
                        <option value="2">The Last Supper</option>
                        <option value="3">The Creation Of Adam</option>
                        <option value="4">Girl With A Pearl Earring</option>
                        <option value="5">The Scream</option>
                        <option value="6">The Night Watch</option>
                        <option value="7">Self-portrait without beard</option>
                        <option value="8">Guernica</option>
                        <option value="9">The Persistence Of Memory</option>
                        <option value="10">The Birth of Venus</option>
                        <option value="11">Water Lilies</option>
                    </select>
                    <input type="submit" value="Show" class="btn btn-success col">
                </form>
            </div>
            <div class="col-md">
                    <?php
                    $url = 'https://www.jacktnp.com/api/gallery';
                    $response = file_get_contents($url);
                    $result = json_decode($response);
                    $num = $_POST["sel"];
                    echo "<div class='obj text-center'>";
                    // echo "<img src='https://jacktfnp.github.io/webtech2019/quiz/api/03/" . ($num + 1) . ".jpeg'>";
                    echo "<h2>" . $result[$num]->name . "</h2>";
                    echo "<p>Year : " . $result[$num]->year . "</p>";
                    for ($i = 0; $i < count($result[$num]->detail[0]->technique); $i++) {
                        echo "<p>Technique " . ($i + 1) . " : " . $result[$num]->detail[0]->technique[$i] . "</p>";
                    }
                    echo "<p>Dimension : " . $result[$num]->detail[0]->dimensions[0]->width . "cm. X " . $result[$num]->detail[0]->dimensions[0]->height . "cm. </p>";
                    echo "<p>Era : " . $result[$num]->detail[0]->era . "</p>";
                    echo "<p>Artist : " . $result[$num]->artist . "</p>";
                    echo "<p>Location : " . $result[$num]->location[0]->storagelocation . "</p>";
                    echo "<p>City : " . $result[$num]->location[0]->city . "</p>";
                    echo "<p>Country : " . $result[$num]->location[0]->country . "</p></div>";
                    ?>
            </div>
        </div>
    </div>
</body>

</html>