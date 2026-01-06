<!-- author : Muhammad Jawad
     date : 6 Jan 2026 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
    body{
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    form{
        width: 300px;
        margin: 60px auto;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 1px 3px 10px black;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"]{
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="radio"]{
        margin-right: 5px;
    }

    input[type="submit"],
    input[type="reset"]{
        padding: 8px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]{
        background-color: #4CAF50;
        color: white;
    }

    input[type="reset"]{
        background-color: #f44336;
        color: white;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover{
        opacity: 0.8;
    }
</style>

</head>
<body>

<form action="formdata.php" method="post">

    <input type="text" placeholder="Name" name="name" required><br><br>

    <input type="text" placeholder="Father's Name" name="fname" required><br><br>

    <input type="email" placeholder="E-mail" name="email" required><br><br>

    <input type="tel" placeholder="Contact" name="contact" required><br><br>

    <input type="Date" placeholder="Date of Birth" name="dob" required><br><br>

    <strong>Gender:</strong><br>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label><br>

    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br><br>

    <input type="reset">
    <input type="submit" value="Submit">

</form>

</body>
</html>
