<?php 

    $name = $_POST["name"];
    $email = $_POST["email"];
    $dob = $_POST["DOB"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];

    $file ="userdata.csv";
    $handle = fopen($file,"a");
    fwrite($handle,$name ."\n");
    fwrite($handle,$email."\n");
    fwrite($handle,$dob."\n");
    fwrite($handle,$gender."\n");
    fwrite($handle,$country."\n");
    fclose($handle);

    $filename = fopen($file,"r");
    $content = fread($filename, filesize($file));
    echo $content;
    fclose($filename);
?>