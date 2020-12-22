<!DOCTYPE php>
<?php
$con - mysqli_connect('localhost', 'root', '', 'db');

if ($_POST['checkbox'] == 'value1') {
    $inputName = $_POST['input-name'];
    $inputSurname = $_POST['input-surname'];
    $inputPassword = $_POST['input-password'];
    $inputCity = $_POST['input-city'];
    $inputTypeOfUser = $_POST['input-typeofuser'];

    $sql = "INSERT INTO 'reservation' ('Name','Surname','Password','City','TypeOfUser') 
VALUES ('$input-name','$input-surname','$input-password','$input-city','$input-typeofuser')";
}

$rs = mysqli_query($con, $sql);
?>