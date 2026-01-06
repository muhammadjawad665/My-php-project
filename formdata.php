<?php
$name    = isset($_POST['name']) ? $_POST['name'] : '';
$fname   = isset($_POST['fname']) ? $_POST['fname'] : '';
$email   = isset($_POST['email']) ? $_POST['email'] : '';
$contact = isset($_POST['contact']) ? $_POST['contact'] : '';
$gender  = isset($_POST['gender']) ? $_POST['gender'] : '';
$date  = isset($_POST['dob']) ? $_POST['dob'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 60%;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        h2 {
            color: #34495e;
            border-bottom: 1px solid #ddd;
            padding-bottom: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome, <?php echo $name; ?>!</h1>
        <h1>Student Information</h1>

        <h2>Name: <?php echo $name; ?></h2>
        <h2>Father Name: <?php echo $fname; ?></h2>
        <h2>Email: <?php echo $email; ?></h2>
        <h2>Contact: <?php echo $contact; ?></h2>
        <h2>Gender: <?php echo $gender; ?></h2>
        <h2>DOB: <?php echo $date; ?></h2>
    </div>

</body>
</html>


