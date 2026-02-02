<?php 
session_start();

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $btn = @$_POST['btn'];
    $op_input = @$_POST['op'];

    if ($btn == "C") {
        $_SESSION['screen'] = "";
        $_SESSION['num1'] = "";
        $_SESSION['op'] = "";
    } 
    elseif ($op_input != "") {
        $_SESSION['num1'] = $_SESSION['screen'];
        $_SESSION['op'] = $op_input;
        $_SESSION['screen'] = "";
    }
    elseif ($btn == "=") {
        $num1 = (float)$_SESSION['num1'];
        $num2 = (float)$_SESSION['screen'];
        $op = $_SESSION['op'];

        if ($op == "+") { $_SESSION['screen'] = $num1 + $num2; }
        if ($op == "-") { $_SESSION['screen'] = $num1 - $num2; }
        if ($op == "*") { $_SESSION['screen'] = $num1 * $num2; }
        if ($op == "/") { $_SESSION['screen'] = ($num2 != 0) ? $num1 / $num2 : "Error"; }
    } 
    else {
        if(@$_SESSION['screen'] == "Error") { $_SESSION['screen'] = ""; }
        $_SESSION['screen'] .= $btn; 
    }
}

$result = isset($_SESSION['screen']) ? $_SESSION['screen'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
            font-family: sans-serif;
        }

        .cal_cntnr {
            background-color: #333;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            width: 320px;
        }

        h1 {
            color: white;
            font-size: 22px;
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"] {
            width: 100%;
            height: 60px;
            font-size: 28px;
            text-align: right;
            margin-bottom: 20px;
            padding: 10px;
            box-sizing: border-box;
            border: none;
            border-radius: 10px;
            background: #fff;
            color: #333;
        }

        .btn-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        button {
            width: 100%;
            height: 60px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            border-radius: 12px;
            background-color: #ffffff;
            color: #333;
        }

        button:hover {
            background-color: #e0e0e0;
        }

        button[name="op"] {
            background-color: #ff9500;
            color: white;
        }

        button[value="="] {
            background-color: #28a745;
            color: white;
        }

        button[value="C"] {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div class="cal_cntnr">
        <h1>Calculator</h1>
        <form action="" method="post">
            <input type="text" name="screen" value="<?php echo $result; ?>" readonly>
            <div class="btn-grid">
                <button type="submit" name="btn" value="7">7</button>
                <button type="submit" name="btn" value="8">8</button>
                <button type="submit" name="btn" value="9">9</button>
                <button type="submit" name="op" value="+">+</button>

                <button type="submit" name="btn" value="4">4</button>
                <button type="submit" name="btn" value="5">5</button>
                <button type="submit" name="btn" value="6">6</button>
                <button type="submit" name="op" value="-">-</button>

                <button type="submit" name="btn" value="1">1</button>
                <button type="submit" name="btn" value="2">2</button>
                <button type="submit" name="btn" value="3">3</button>
                <button type="submit" name="op" value="*">*</button>

                <button type="submit" name="btn" value="0">0</button>
                <button type="submit" name="btn" value="C">C</button>
                <button type="submit" name="btn" value="=">=</button>
                <button type="submit" name="op" value="/">/</button>
            </div>
        </form>
    </div>
</body>
</html>