<?php
session_start();
 
$valid_password = "@CristianoFeio1";
 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $password = $_POST['password'];
   
    if ($password == $valid_password){
        $_SESSION['authenticated'] = true;
        header("location: documents.php");
        exit();
    } else{
        $error = "Invalid Password !";
    }
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../PORTOFOLIO--Prof-Skills/CSS/style.css" type="text/css">
</head>
<body>
    <header>
        <div class="left">2024-2025 PORTOFOLIO</div>
        <div class="right">
            <a class="active" href="../PORTOFOLIO--Prof-Skills/index.html">Home</a>
            <a href="../PORTOFOLIO--Prof-Skills/login.php">Log In</a>
        </div>
    </header>
    <main>
        <form action="login.php" method="POST" class="form-container">
        <h2>Enter Password</h2>
        <?php if (isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Submit</button>
        </form>
    </main>
     <footer>
            <div class="left">
                <a href="mailto:cfeio1351@gmail.com">cfeio1351@gmail.com</a>
            </div>
            <div class="right">
                <a href="tel:+1234567890">Tel: +1234567890</a>
            </div>
     </footer>
</body>
</html>