<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo">
        <h1>Contact Us</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    
    <main>
        <h2>Contact Information</h2>
        <p>If you have any questions, please feel free to contact us:</p>
        
        <form action="process_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>
            
            <button type="submit">Submit</button>
        </form>
    </main>
    
    <footer>
        &copy; <?php echo date("Y"); ?> Your Website. All rights reserved.
    </footer>
</body>
</html>
