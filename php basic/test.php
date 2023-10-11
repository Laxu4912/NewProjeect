<?php
//1. write a program to convert currency from $ to npr.
//2. create a dynamic calculator.
//3. createa proper 8*8 box chessboard.
//4.create a program to count the unique substring to 4 character
// from a given string.($input='abcdbcf')

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
    Enter the Currency in Dollar:
    <input type="double" name="currency" placeholder="$"> <br><br>
    <button type="submit">Convert The Currency</button>
    </form> 
</body>
</html>

<?php

    if($_POST["currency"]){
        $dollar= $_POST["currency"]; // 5
        $npr = $dollar * 116;
        echo "This is your converted value = ".$npr ;              

}




?>