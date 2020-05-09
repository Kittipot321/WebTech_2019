<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    table {
        font-size: 20pt;
    }

    .text {
        color: red;
    }
</style>
<?php
$arr = array($_POST["id"], $_POST["name"], $_POST["sname"], $_POST["address"], $_POST["city"], $_POST["province"], $_POST["postcode"], $_POST["tel"]);
$discription = array("หมายเลขบัตรประชาชน", "ชื่อ", "นามสกุล", "ที่อยู่", "อำเภอ/เขต", "จังหวัด", "รหัสไปรษณีย์", "เบอร์โทรศัพท์");
echo "<h1>ข้อมูลของสมาชิก</h1><hr>";
echo "<table class='container table table-striped'>";
echo "<tr class='bg-primary'><th> ลำดับ</th><th> รายการ</th></tr>";
for ($i = 0; $i < count($arr); $i++) {
    if (strlen($arr[$i]) < 5) {
        echo "<tr><td>" . ($i + 1) . " " . $discription[$i] . " </td><td class='text'>" . $arr[$i] . "</td></tr>";
    } else {
        echo "<tr><td>" . ($i + 1) . " " . $discription[$i] . " </td><td>" . $arr[$i] . "</td></tr>";
    }
}
echo "</table>";
?>