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
    <title>Lab 3 with boolstrap</title>
</head>
<body>
    <!---->
    <form method="post" action="3-1.php">
        <div class="container text-center col-7">
            <nav class="navbar navbar-dark-flex-column bg-primary">
                <h1 class="text-white text-center">ลงทะเบียน</h1>
            </nav>
            <hr color="red" width="500">
            <div class="row justify-content-md-center">
                <div class="form-group text-center col-6">
                    <label for="id">หมายเลขบัตรประชาชน</label>
                        <input type="text" name="id" class="form-control form-control-sm" value="1112345321446">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <p>ชื่อ</p>
                    <input type="text" name="name" class="form-control form-control-sm" value="Kittipot">
                </div>
                <div class="col">
                    <p>นามสกุล</p>
                    <input type="text" name="sname" class="form-control form-control-sm" value="Laorngsri">
                </div>
            </div>
            <p>ที่อยู่</p>
            <input type="text" name="address" class="form-control form-control-sm" value="44/50">
            <div class="form-row row justify-content-md-center">
                <div class="col-3">
                    <p>อำเภอ</p>
                    <input type="text" name="city" class="form-control form-control-sm" value="Bangsaothong">
                </div>
            </div>
            <div class="form-row row justify-content-md-center">
                <div class="col col-lg-3">
                    <p>จังหวัด</p>
                    <input type="text" name="province" class="form-control form-control-sm" value="Samutprakarn">
                </div>
                <div class="col-2">
                    <p>รหัสไปรษณีย์</p>
                    <input type="text" name="postcode" class="form-control form-control-sm" value="10570">
                </div>
                <div class="col-3">
                    <p>เบอร์โทรศัพท์</p>
                    <input type="text" name="tel" class="form-control form-control-sm" value="0812345678">
                </div>
            </div><br>
            <input type="submit" value="Submit" name="submit" class="btn btn-success mb-2 btn-block">
        </div>
    </form>
</body>
</html>