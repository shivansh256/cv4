<?php



session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>
<body>
   <a href="logout.php">logout</a>
   <h1> WELCOME <?php echo $_SESSION['username']; ?> </h1>
</body>
</html>

