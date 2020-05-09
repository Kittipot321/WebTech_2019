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
    .card{
        padding: 2% 1% 1% 2%;
    }
</style>
<body>
    <h1 class="text-center">Steam Search</h1>
    <hr>
    <form action="" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <p>ค้นหาโดย</p>
            </div>
                <div class="col-sm">
                    <select name="year" id="" class="form-control col-sm">
                        <option value="-1">---ไม่เลือกปี---</option>
                        <option value="2012">2012</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                    </select>
                </div>
                <div class="col-sm">
                    <select name="rating" id="" class="form-control col-sm">
                        <option value="-1">---ไม่เลือกยอดเข้าชม---</option>
                        <option value="0">0-1000</option>
                        <option value="1001">1001-10000</option>
                        <option value="10001">10001-100000</option>
                        <option value="100001">100001-1000000</option>
                        <option value="1000001">1 ล้านขึนไป</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <input type="submit" value="ค้นหา" class="btn btn-success col-sm">
            </form>
        </div>
    </div>
    <?php
    $url = 'https://www.jacktnp.com/api/steam';
    $response = file_get_contents($url);
    $result = json_decode($response);
    $sel1 = $_POST["year"];
    $sel2 = $_POST["rating"];
    for ($i = 0;$i < count($result);$i++){
        if (($sel1 == 0) && (1000 >= $result[$i]->all_reviews)){
            echo "<br><div class='card'>";
            echo "<h4>".$result[$i]->title."</h4>";
            echo "<p>Release : ".$result[$i]->year;
            echo " (".$result[$i]->all_reviews." reviews)";
            if (isset($result[$i]->links[0]->website))
            {
                echo " <a href='".$result[$i]->links[0]->website."'>website</a>";
            }
            if (isset($result[$i]->links[0]->steam))
            {
                echo " <a href='".$result[$i]->links[1]->steam."'>steam</a>";
            }
            if (isset($result[$i]->links[1]->website))
            {
                echo " <a href='".$result[$i]->links[0]->website."'>website</a>";
            }
            if (isset($result[$i]->links[1]->steam))
            {
                echo " <a href='".$result[$i]->links[1]->steam."'>steam</a>";
            }
            echo "<ul>";
            for ($j = 0;$j < count($result[$i]->genres);$j++){
                echo "<li>".$result[$i]->genres[$j]."</li>";
            }
            echo "</ul></div>";
        }
        if (($sel1 == $result[$i]->year)){
            echo "<br><div class='card'>";
            echo "<h4>".$result[$i]->title."</h4>";
            echo "<p>Release : ".$result[$i]->year;
            echo " (".$result[$i]->all_reviews." reviews)";
            if (isset($result[$i]->links[0]->website))
            {
                echo " <a href='".$result[$i]->links[0]->website."'>website</a>";
            }
            if (isset($result[$i]->links[0]->steam))
            {
                echo " <a href='".$result[$i]->links[0]->steam."'>steam</a>";
            }
            if (isset($result[$i]->links[1]->website))
            {
                echo " <a href='".$result[$i]->links[0]->website."'>website</a>";
            }
            if (isset($result[$i]->links[1]->steam))
            {
                echo " <a href='".$result[$i]->links[1]->steam."'>steam</a>";
            }
            echo "<ul>";
            for ($j = 0;$j < count($result[$i]->genres);$j++){
                echo "<li>".$result[$i]->genres[$j]."</li>";
            }
            echo "</ul></div>";
        }
        else if (strlen($sel2) == strlen($result[$i]->all_reviews)){
            echo "<br><div class='card'>";
            echo "<h4>".$result[$i]->title."</h4>";
            echo "<p>Release : ".$result[$i]->year;
            echo " (".$result[$i]->all_reviews." reviews)";
            if (isset($result[$i]->links[0]->website))
            {
                echo " <a href='".$result[$i]->links[0]->website."'>website</a>";
            }
            if (isset($result[$i]->links[0]->steam))
            {
                echo " <a href='".$result[$i]->links[0]->steam."'>steam</a>";
            }
            if (isset($result[$i]->links[1]->website))
            {
                echo " <a href='".$result[$i]->links[0]->website."'>website</a>";
            }
            if (isset($result[$i]->links[1]->steam))
            {
                echo " <a href='".$result[$i]->links[1]->steam."'>steam</a>";
            }
            echo "<ul>";
            for ($j = 0;$j < count($result[$i]->genres);$j++){
                echo "<li>".$result[$i]->genres[$j]."</li>";
            }
            echo "</ul></div>";
        }
        else if ($sel1 == -1 & $sel2 == -1){
            echo "<br><div class='card'>";
            echo "<h4>".$result[$i]->title."</h4>";
            echo "<p>Release : ".$result[$i]->year;
            echo " (".$result[$i]->all_reviews." reviews)";
            if (isset($result[$i]->links[0]->website))
            {
                echo " <a href='".$result[$i]->links[0]->website."'>website</a>";
            }
            if (isset($result[$i]->links[0]->steam))
            {
                echo " <a href='".$result[$i]->links[0]->steam."'>steam</a>";
            }
            if (isset($result[$i]->links[1]->website))
            {
                echo " <a href='".$result[$i]->links[0]->website."'>website</a>";
            }
            if (isset($result[$i]->links[1]->steam))
            {
                echo " <a href='".$result[$i]->links[1]->steam."'>steam</a>";
            }
            echo "<ul>";
            for ($j = 0;$j < count($result[$i]->genres);$j++){
                echo "<li>".$result[$i]->genres[$j]."</li>";
            }
            echo "</ul></div>";
        }
    }
    echo "<br>";
    ?>
    </div>
    
</body>

</html>