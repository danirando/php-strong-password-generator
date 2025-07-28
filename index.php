<?php

require './functions.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-3"><h1>Strong password generator</h1>
    <hr>
    <form action="" class="form-control d-flex gap-3 align-items-center">
        <label for="password_length">Lunghezza Password</label>
        <input type="number" name="password_length" id="password_length" placeholder="8">
        <button class="btn btn-primary">Submit</button>
        <?php echo "<h1>Password generata: " . generatePassword($password_length); ?>
    </form>



    </div>
    



</body>
</html>