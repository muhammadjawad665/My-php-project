<!-- Table generator_2026
     author : Muhammad Jawad
     date : 1-02-2026 
     -->

<!DOCTYPE html>
<html>
<head>
    <title>Table Generator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            margin: 0;
            padding-top: 50px;
        }

        .contnr {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            width: 320px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        input[type="number"] {
            height: 40px;
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 0 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        button {
            margin-top: 10px;
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
        }

        .output {
            margin-top: 25px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            width: 320px;
            text-align: center;
            line-height: 1.6;
            color: #444;
        }
    </style>
</head>
<body>

    <div class="contnr">
        <h2>Table Generator</h2>
        <form method="POST" action="">
            <input type="number" name="table_num" placeholder="Enter Number"><br>
            <input type="number" name="table_ntime" placeholder="Enter Time"><br>
            <input type="submit" name="generate" value="View Table"><br>
            <a href=""><button type="button">Clear</button></a>
        </form>
    </div>

    <?php
    if (isset($_POST['generate'])) {
        $num = $_POST['table_num'];
        $ntimes = $_POST['table_ntime'];

        echo "<div class='output'>";
        echo "<h3>Table of $num:</h3>";
        
        for ($i = 1; $i <= $ntimes; $i++) {
            $result = $num * $i;
            echo "$num x $i = $result<br>";
        }
        echo "</div>";
    }
    ?>

</body>
</html>