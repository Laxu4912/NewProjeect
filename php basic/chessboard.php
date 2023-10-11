<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chessboard</title>
    <style>
        table {
            border: 1px solid black;
        }
        td {
            padding: 20px; border:1px solid black
        }
    </style>
</head>
<body>   
    </table>
    <form action="Chessboard.php" method = "post">
<input type="text" name="CB">
<input type="Submit" name ="Submit" value="Generate your own board">

</form>
<br>
    <?php
if(isset($_POST['Sbumit'])){
    $data = $_POST['CB'];
    for($row=1; $row<=$data; $row++){
        echo "<tr>";

        for ($col=1; $col <= $data; $col++){

        }
        echo"</tr>";
    }
}
    ?>

</body>
</html>