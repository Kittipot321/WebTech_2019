<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $url = 'profile.json';
        $response = file_get_contents($url);
        $result = json_decode($response);
        echo $result[0]->health[0]->height[0]->as[0];
    ?>
</body>
</html>