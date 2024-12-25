<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// ฟังก์ชันกรองข้อมูล
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $nickname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $nickname = test_input($_POST["nickname"]);

    // เปิดไฟล์และเขียนข้อมูลทับลงไป
    $myfile = fopen("stdent.txt", "a") or die("Unable to open file!");
    $txt = "Name: $name\n";
    fwrite($myfile, $txt);
    $txt ="Nickname: $nickname\n";
    fwrite($myfile, $txt);
    fclose($myfile);
}
// รับข้อมูล
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name" required><br><br>
    Nickname: <input type="text" name="nickname" required>
    <br><br>
    <input type="submit" name="submit" value="Submit"> 
</form>

<?php
//แสดงผลที่กรอกมา

?>
<?php
    $myfile = fopen("stdent.txt", "r") or die("Unable to open file!");
    // วนรอบด้วย while จนกว่าจะหมด
    while(!feof($myfile )) {
      echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
?>
</body>
</html>
