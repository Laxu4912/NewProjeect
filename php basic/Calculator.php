<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    
    <form action="Calculator.php" method="post">
    <table>
        <label> <input type="Calculate" placeholder="result"></label>
           <div>
            <td><input type="button" value="C"></td><br><br>
           </div> 
        <div>
                <tr>
                    <td><input type="button" value="1"></td>
                    <td><input type="button" value="2"></td>
                    <td><input type="button" value="3"></td>
                    <td><input type="button" value="+"></td>
                </tr><br><br>
            </div>

            <div>
                <tr>
                    <td><input type="button" value="4"></td>
                    <td><input type="button" value="5"></td>
                    <td><input type="button" value="6"></td>
                    <td><input type="button" value="*"></td>
                </tr><br>
            </div>
            <div>
                <tr>
                    <td><input type="button" value="7"></td>
                    <td><input type="button" value="8"></td>
                    <td><input type="button" value="9"></td>
                    <td><input type="button" value="-"></td>
                </tr><br>
            </div>
         <button>Output</button>
         </table>

    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["Number1"];
        $number2 = $_POST["Number2"];
        $operation = $_POST["Calculator"];

        $result = 0;
         

        switch ($operation) {
            case "Add":
                $result = $number1 + $number2;
                break;
            case "Subtract":
                $result = $number1 - $number2;
                break;
            case "Multiply":
                $result = $number1 * $number2;
                break;
            case "divide":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
        } 

        echo "Your calculated result is : "+ $result;
    }

   


?>

</body>
</html>