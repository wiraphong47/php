<?php
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "Donald Duck";
    fwrite($myfile, $txt);
    $txt = "Goofy Goof";
    fwrite($myfile, $txt);
    fclose($myfile);
?>
 <h1>ข้อมูลนักศึกษาที่ใช้ </h1>
 <?php
    $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
    // วนรอบด้วย while จนกว่าจะหมด
    while(!feof($myfile)) {
      echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
?>