<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    table {
        font-size: 20pt;
    }
    .text{
        color: red;
    }
</style>
<?php
$arr = array("id" => $_POST["id"], "name" => $_POST["name"], "sname" => $_POST["sname"], "address" => $_POST["address"], "city" => $_POST["city"], "province" => $_POST["province"],"postcode" => $_POST["postcode"], "tel" => $_POST["tel"]);
$inarr = array("id","name","sname","address","city","province","postcode","tel");
echo "<h1>ข้อมูลของสมาชิก</h1><hr>";
echo "<table class='container table table-striped'>";
echo "<tr class='bg-success'><th> ลำดับ</th><th> รายการ</th></tr>";
for($i = 0;$i < count($arr);$i++){
    if (strlen($arr[$inarr[$i]]) < 5){
    echo "<tr><td>".($i+1)." </td><td class='text'>" . $arr[$inarr[$i]] . "</td></tr>";
    }else{
    echo "<tr><td>".($i+1)." </td><td>" . $arr[$inarr[$i]] . "</td></tr>";
}}
echo "</table>";
?>