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
<body>

    <?php
    if(isset($_POST['submit'])) 
    { 
     $from = $_POST['box'];
     $to = $_POST['box1'];
     $input = $_POST['input'];
     $url = "http://10.0.15.12/lab9/restapis/latest"; 
     $response = file_get_contents($url);    
     $result = json_decode($response);
     $ans = 0;
     foreach($result->rates as $key => $value){
        
        if($key == $to){
            ($ans+=($input*=$value));
           
     }

    }
     foreach($result->rates as $key => $value){
        
        if($key == $from){
            ($ans/=$value);
    }
    }
    
    }else{
        $ans = "";}
     ?>

    <form action="" method ="POST">
    <h2>Currency Converter</h2>
    <div>
        <p>From:</p>
        <select id="box" name="box">
            <option value="THB">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" id="input" name="input">
    </div>
    <div>
        <p>TO:</p>
        <select id="box1" name="box1">
            <option value="THB">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" id="ans" value= "<?php echo "$ans";?>">
        
    </div>
    <br>
    <button type="submit" name="submit">Submit</button> 
    </form>
</body>
</html>