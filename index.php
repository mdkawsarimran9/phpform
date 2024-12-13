<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required><br>
            <label for="email">Your Email</label>
            <input type="text" id="email" name="email" placeholder="Email" required><br>
            <button type="submit" name="submit" class="btn btn-danger">Submit</button>
        </form>

        <?php  
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            echo "Hi Mr $name, your email is: $email";  
        }   
        
        
        ?>

    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>