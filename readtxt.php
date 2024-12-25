<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Textfile</title>
    <style>
        .mytxt{color:rgb(0, 38, 255);}
    </style>
</head>
<body>
    <h1>ข้อมูลนักศึกษาที่ใช้ fread</h1>
<?php
    $myfile = fopen("myname.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("myname.txt"));
    fclose($myfile);
?>
    <h1>ข้อมูลนักศึกษาที่ใช้ fgets</h1>
<?php
    $myfile = fopen("myname.txt", "r") or die("Unable to open file!");
    echo fgets($myfile); //แสดงผล 1 line
    fclose($myfile);
?>
<h1>ข้อมูลนักศึกษาที่ใช้ fgets ร่วมกับ feof</h1>
<?php
    $myfile = fopen("myname.txt", "r") or die("Unable to open file!");
    // วนรอบด้วย while จนกว่าจะหมด
    while(!feof($myfile)) {
      echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
?>




</body>
</html>