<?php
$name    = isset($_POST['name']) ? $_POST['name'] : '';
$fname   = isset($_POST['fname']) ? $_POST['fname'] : '';
$email   = isset($_POST['email']) ? $_POST['email'] : '';
$contact = isset($_POST['contact']) ? $_POST['contact'] : '';
$gender  = isset($_POST['gender']) ? $_POST['gender'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
</head>
<body>

    <h1>Student Information</h1>

    <h2>Name: <?php echo htmlspecialchars($name); ?></h2>
    <h2>Father Name: <?php echo htmlspecialchars($fname); ?></h2>
    <h2>Email: <?php echo htmlspecialchars($email); ?></h2>
    <h2>Contact: <?php echo htmlspecialchars($contact); ?></h2>
    <h2>Gender: <?php echo htmlspecialchars($gender); ?></h2>

</body>
</html>

