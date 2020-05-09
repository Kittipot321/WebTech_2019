<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
    .card.text-center{
        padding-top: 8px;
        padding-bottom: 8px;
    }
</style>
<body>
    <div class="container">
    <?php
        $url = 'https://jacktnp.github.io/webtech2019/quiz/api/01/football.json';
        $response = file_get_contents($url);
        $result = json_decode($response);
        echo "<div class='card text-center'>Albania</div><br>";
        echo "<div class='row'>";
        foreach ($result->teams as $like){
            
            if ($like->area->name == "Albania"){
                echo "<div class='col'>";
                echo "<div class='card'>";
                echo "<h2>".$like->name."</h2>";
                echo "Short name : ".$like->shortName."<br>";
                echo "Found : ".$like->founded."<br>";
                echo "</div></div>";
            }
        }
        echo "</div><br>";
        echo "<div class='card text-center'>England</div><br>";
        echo "<div class='row'>";
        foreach ($result->teams as $like){
            
            if ($like->area->name == "England"){
                echo "<div class='col-6'>";
                echo "<div class='card'>";
                echo "<h2>".$like->name."</h2>";
                echo "Short name : ".$like->shortName."<br>";
                echo "Found : ".$like->founded."<br>";
                echo "</div><br></div>";
            }
        }
        echo "</div><br>";
        echo "<div class='card text-center'>Czech Republic</div><br>";
        echo "<div class='row'>";
        foreach ($result->teams as $like){
            
            if ($like->area->name == "Czech Republic"){
                echo "<div class='col-6'>";
                echo "<div class='card'>";
                echo "<h2>".$like->name."</h2>";
                echo "Short name : ".$like->shortName."<br>";
                echo "Found : ".$like->founded."<br>";
                echo "</div><br></div>";
            }
        }
        echo "</div><br>";
    ?>
    </div>
    
</body>
</html>