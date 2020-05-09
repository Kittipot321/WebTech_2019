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
    img {
        height: 300px;
        width: 300px;
    }

    .no {
        background-color: white;
    }
</style>

<body>
    <div class="bg-dark text-white sticky-top text-center">
        <h1>Kittipot's Store</h1>
        <script type="text/javascript">
            var num = 0;
            function clicks() {
                num++;
                if (num > 10){
                    document.getElementById("information").innerHTML = "<div class='alert alert-danger' role='alert'>Your cart cannot have greater 10 items!</div>";
                }
                else{
                    document.getElementById('show').innerHTML = "My Cart : " + num;
                }
            }
            function clears() {
                num = 0;
                document.getElementById("information").innerHTML = "";
                document.getElementById('show').innerHTML = "My Cart : " + num;
            }
        </script>
        <div class="bg-info">
            <div class="row">
                <div class="col">
                    <p id="show" class="text-right">My Cart : 0</p>
                </div>
                <div class="col-3">
                    <button class="btn btn-danger" onclick="clears()">Clear!</button>
                </div>
            </div>
        </div>
    </div>
    <p id="information"></p>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <img src="image (1).jpg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Naruto</h3>
                        <p class="card-text">Price : 890 ฿</p>
                    </div>
                    <button class="btn btn-primary col" onclick="clicks()">Add to cart</button>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="image (2).jpg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">My hero academia</h3>
                        <p class="card-text">Price : 1,490 ฿</p>
                    </div>
                    <button class="btn btn-primary col" onclick="clicks()">Add to cart</button>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="image (3).jpg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">My hero academia</h3>
                        <p class="card-text">Price : 290 ฿</p>
                    </div>
                    <button class="btn btn-primary col" onclick="clicks()">Add to cart</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <img src="image (4).jpg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">My hero academia</h3>
                        <p class="card-text">Price : 290 ฿</p>
                    </div>
                    <button class="btn btn-primary col" onclick="clicks()">Add to cart</button>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top no">
                    <div class="card-body">
                        <h3 class="card-title">------</h3>
                        <p class="card-text">Price : -</p>

                    </div>
                    <button class="btn btn-info col" onclick="clicks()" disabled>Add to cart</button>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top no">
                    <div class="card-body">
                        <h3 class="card-title">------</h3>
                        <p class="card-text">Price : -</p>

                    </div>
                    <button class="btn btn-info col" onclick="clicks()" disabled>Add to cart</button>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>

</html>