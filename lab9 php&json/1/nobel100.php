<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>4</title>
    <style>
        .content {
            margin-left: 15%;
            margin-right: 15%;
        }

        hr {
            background-color: blue;
        }

        body {
            background: url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/JETFf6K/simple-background-square-s-color-4k_4hlen8zvwg__F0000.png') fixed;
        }
    </style>
</head>

<body>
    <center>
        <h1>Nobel Prize 2010-2018</h1>
        <hr color="red">
        <form action="" method="post">
            <select name="year" class="form-control-sm">
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
            </select>
            <input type="submit" value="Show" class="btn-primary btn">
    </center>
    <div class="content">
        <?php $url = "http://10.0.15.12/lab9/restapis/nobleprize100";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $yearsel = $_POST["year"];
        echo "<br>";
        //2018
        if ($yearsel == 2018) {
            echo "<h3>Year : " . $result[0]->year . "</h3>";
            for ($i = 0; $i <= 4; $i++) {
                echo "Category : " . $result[$i]->category . "<br>";
                foreach ($result[$i]->laureates as $show) {
                    echo "ID : " . $show->id . "<br>";
                    echo "Firstname : " . $show->firstname . "<br>";
                    echo "Surname : " . $show->surname . "<br>";
                    echo "Motivate : " . $show->motivation . "<br>";
                }
                echo "<hr>";
            }
            //2017
        } else if ($yearsel == 2017) {
            echo "<h3>Year : " . $result[5]->year . "</h3>";
            for ($i = 5; $i <= 10; $i++) {
                echo "Category : " . $result[$i]->category . "<br>";
                foreach ($result[$i]->laureates as $show) {
                    echo "ID : " . $show->id . "<br>";
                    echo "Firstname : " . $show->firstname . "<br>";
                    echo "Surname : " . $show->surname . "<br>";
                    echo "Motivate : " . $show->motivation . "<br>";
                }
                echo "<hr>";
            }
            //2016
        } else if ($yearsel == 2016) {
            echo "<h3>Year : " . $result[11]->year . "</h3>";
            for ($i = 11; $i <= 16; $i++) {
                echo "Category : " . $result[$i]->category . "<br>";
                foreach ($result[$i]->laureates as $show) {
                    echo "ID : " . $show->id . "<br>";
                    echo "Firstname : " . $show->firstname . "<br>";
                    echo "Surname : " . $show->surname . "<br>";
                    echo "Motivate : " . $show->motivation . "<br>";
                }
                echo "<hr>";
            }
            //2015
        } else if ($yearsel == 2015) {
            echo "<h3>Year : " . $result[17]->year . "</h3>";
            for ($i = 17; $i <= 22; $i++) {
                echo "Category : " . $result[$i]->category . "<br>";
                foreach ($result[$i]->laureates as $show) {
                    echo "ID : " . $show->id . "<br>";
                    echo "Firstname : " . $show->firstname . "<br>";
                    echo "Surname : " . $show->surname . "<br>";
                    echo "Motivate : " . $show->motivation . "<br>";
                }
                echo "<hr>";
            }
            //2014
        } else if ($yearsel == 2014) {
            echo "<h3>Year : " . $result[23]->year . "</h3>";
            for ($i = 23; $i <= 28; $i++) {
                echo "Category : " . $result[$i]->category . "<br>";
                foreach ($result[$i]->laureates as $show) {
                    echo "ID : " . $show->id . "<br>";
                    echo "Firstname : " . $show->firstname . "<br>";
                    echo "Surname : " . $show->surname . "<br>";
                    echo "Motivate : " . $show->motivation . "<br>";
                }
                echo "<hr>";
            }
            //2013
        } else if ($yearsel == 2013) {
            echo "<h3>Year : " . $result[29]->year . "</h3>";
            for ($i = 29; $i <= 34; $i++) {
                echo "Category : " . $result[$i]->category . "<br>";
                foreach ($result[$i]->laureates as $show) {
                    echo "ID : " . $show->id . "<br>";
                    echo "Firstname : " . $show->firstname . "<br>";
                    echo "Surname : " . $show->surname . "<br>";
                    echo "Motivate : " . $show->motivation . "<br>";
                }
                echo "<hr>";
            }
        } else if ($yearsel == 2012) {
            echo "<h3>Year : " . $result[35]->year . "</h3>";
            for ($i = 35; $i <= 40; $i++) {
                echo "Category : " . $result[$i]->category . "<br>";
                foreach ($result[$i]->laureates as $show) {
                    echo "ID : " . $show->id . "<br>";
                    echo "Firstname : " . $show->firstname . "<br>";
                    echo "Surname : " . $show->surname . "<br>";
                    echo "Motivate : " . $show->motivation . "<br>";
                }
                echo "<hr>";
            }
        } else if ($yearsel == 2011) {
            echo "<h3>Year : " . $result[41]->year . "</h3>";
            for ($i = 41; $i <= 46; $i++) {
                echo "Category : " . $result[$i]->category . "<br>";
                foreach ($result[$i]->laureates as $show) {
                    echo "ID : " . $show->id . "<br>";
                    echo "Firstname : " . $show->firstname . "<br>";
                    echo "Surname : " . $show->surname . "<br>";
                    echo "Motivate : " . $show->motivation . "<br>";
                }
                echo "<hr>";
            }
        } else if ($yearsel == 2010) {
            echo "<h3>Year : " . $result[47]->year . "</h3>";
            for ($i = 47; $i <= 48; $i++) {
                echo "Category : " . $result[$i]->category . "<br>";
                foreach ($result[$i]->laureates as $show) {
                    echo "ID : " . $show->id . "<br>";
                    echo "Firstname : " . $show->firstname . "<br>";
                    echo "Surname : " . $show->surname . "<br>";
                    echo "Motivate : " . $show->motivation . "<br>";
                }
                echo "<hr>";
            }
        }
        ?>
    </div>
    </form>
</body>

</html>