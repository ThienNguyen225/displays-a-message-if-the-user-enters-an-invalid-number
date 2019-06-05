<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstNumber = $_POST["firstNumber"];
    $theSecondNumber = $_POST["theSecondNumber"];
    function performCalculations($firstNumber, $theSecondNumber){
        if ($_POST["calculation"] === "+"){
            echo $firstNumber + $theSecondNumber;
        }
        if ($_POST["calculation"] === "-"){
            echo $firstNumber - $theSecondNumber;
        }
        if ($_POST["calculation"] === "*"){
            echo $firstNumber * $theSecondNumber;
        }
        if ($_POST["calculation"] === "/"){
            if ($firstNumber === 0){
                throw new Exception("Division by zero.");
            }
            echo $firstNumber / $theSecondNumber;
        }
    }
    try{
        performCalculations($firstNumber, $theSecondNumber);
    }catch (Exception $e){
        echo 'Caught exception: ', $e->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập hiển thị thông báo nếu người dùng nhập số bất hợp lệ</title>
    <style>
        form{
            margin-left: 40%;
        }
        h2{
            color: blue;
            margin-left: 30px;
        }
        .display{
            height: 200px; width: 250px;
            margin: 0;
            padding: 10px;
            border:1px #dd33dd solid;
        }
        select[name=calculation]{
            margin-left: 20px;
        }
        input[type=submit]{
            margin-left: 35%;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Simple Calculator</h2>
        <fieldset>
            <legend>Calculator</legend>
            <br>First name:
            <input type="number" name="firstNumber" size="30">
            <br>Operator:
            <select name="calculation">
                <option value="+">summation</option>
                <option value="-">summation</option>
                <option value="*">multiplication</option>
                <option value="/">division</option>
            </select>
            <br>Last name:
            <input type="number" name="theSecondNumber" size="30">
            <br><input type="submit" value="performCalculations">
        </fieldset>
    </div>
</form>
</body>
</html>
<!--    <!doctype html>-->
<!--    <html lang="en">-->
<!--    <head>-->
<!--        <meta charset="UTF-8">-->
<!--        <meta name="viewport"-->
<!--              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--        <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--        <title>Document</title>-->
<!--    </head>-->
<!--    <body>-->
<!--    <form method="post" action="">-->
<!--        <h1>Simple Calculator</h1>-->
<!--        <fieldset>-->
<!--            <legend>Calculator</legend>-->
<!--            First name:<br>-->
<!--            <input type="text" name="firstOperand"><br>-->
<!--            Operator:<br>-->
<!--            <select name="cal">-->
<!--                <option value="add">Addition</option>-->
<!--                <option value="sub">Subtraction</option>-->
<!--                <option value="mul">Multiplication</option>-->
<!--                <option value="div">Division</option>-->
<!--            </select>-->
<!--            <br>Last name:<br>-->
<!--            <input type="text" name="secondOperand"><br><br>-->
<!--            <input type="submit" value="Submit">-->
<!--        </fieldset>-->
<!--    </form>-->
<!--    </body>-->
<!--    </html>-->
<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $firstNumber = $_POST["firstOperand"];
//    $secondNumber = $_POST["secondOperand"];
//    function cal($firstNumber, $secondNumber)
//    {
//        if ($_POST["cal"] == "add") {
//            echo $firstNumber + $secondNumber;
//        }
//        if ($_POST["cal"] == "sub") {
//            echo $firstNumber - $secondNumber;
//        }
//        if ($_POST["cal"] == "mul") {
//            echo $firstNumber * $secondNumber;
//        }
//        if ($_POST["cal"] == "div") {
//            if ($secondNumber == 0) {
//                throw new Exception('Division by zero.');
//            }
//            echo $firstNumber / $secondNumber;
//        }
//    }
//    try {
//        cal($firstNumber, $secondNumber);
//    } catch (Exception $e) {
//        echo 'Caught exception: ', $e->getMessage();
//    }
//}
//?>