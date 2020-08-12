<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>congrats page</title>
</head>
<body bgcolor="<?php echo $_POST["color"]; ?>">
        <script type="text/javascript"> 
            function myFunction() {
            document.body.style.backgroundColor = <?php echo $_POST["color"]?>;
            }
        </script> 
<div class="info_container">
    <h1>Welcome <?php echo ''.$_POST["fname"].' '.$_POST["lname"]. ' ';?> to Wejapa Internship </h1><br>
    <h1>Email address : <?php echo $_POST["email"]; ?></h1>  
    <h2> Date of Birth : <?php echo $_POST["dob"] ?></h2>
    <h2> Gender : <?php echo $_POST["gender"] ?></h2>
    <h2> Department : <?php echo $_POST["department"] ?> </h2>
</div>


</body>
</html>