<!DOCTYPE html>
<html>
<head>
    <title>Your PHP Website</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo">
        <h1>Welcome to Your Website</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    
    <main>
        <h2>About Us</h2>
        <p>Welcome to our website! We are here to serve your needs...</p>
    </main>
    
    <footer>
        &copy; <?php echo date("Y"); ?> Your Website. All rights reserved.
    </footer>
</body>
</html>
