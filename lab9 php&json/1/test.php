<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bitcoin Price</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .col-sm-3 {
        padding-bottom: 41%;
    }

    .obj {
        margin-left: 25%;
        margin-top: 15%;
        border: 2px solid black;
        padding: 20% 20% 40% 20%;
        border-radius: 5%;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 bg-secondary">
                <h1>Bitcoin Price</h1>
                <form action="" method="POST">
                    <input type="submit" value="Click">
                </form>
            </div>
            <div class="col-6">
                <div class="obj">
                    <h1>Result</h1>
                    <?php
                    $url = 'profile.json';
                    $respond = file_get_contents($url);
                    $result = json_decode($respond);
                    foreach ($result as $like) {
                        if ($like->tel != null) {
                            echo "$like->tel";
                        } else {
                            echo "";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>