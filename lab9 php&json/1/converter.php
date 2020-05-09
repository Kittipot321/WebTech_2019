<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>1</title>
</head>

<body>
    <center>
    <h1>Currency Converter</h1>
    <hr>
    <div class="container">
    <form method="post" action="result.php">
        <div class="form-group">
        <label>From : </label>
        <select name="select1" class="form-control-sm">
            <option value="0">THB</option>
            <option value="1">JPY</option>
            <option value="2">CNY</option>
            <option value="3">SGD</option>
            <option value="4">USD</option>
        </select>
        <input type="text" class="form-group-sm" name="amount" required><br><br>
        <label>To : </label>
        <select name="select2" class="form-control-sm">
            <option value="0">THB</option>
            <option value="1">JPY</option>
            <option value="2">CNY</option>
            <option value="3">SGD</option>
            <option value="4">USD</option>
        </select>
        <input type="text" name="answer" class="form-group-sm" disabled>
        </div>
        <input type="submit" value="Convert" class="btn btn-outline-success">
        </form>
    </div>
    </center>
</body>

</html>
<!-- THB, JPY, CNY, SGD, USD -->