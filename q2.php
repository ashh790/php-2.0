<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

  
    $file = fopen("student_data.txt", "a");
    fwrite($file, "$name, $age, $course\n");
    fclose($file);

   
    header("Location: thankyou.php");
    exit();
}

?>