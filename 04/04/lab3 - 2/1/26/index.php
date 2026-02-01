<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Bake It Till You Make It</title>
</head>
<body>

<h1>Contact Our Bakery</h1>

<!-- Basic contact form that sends data to process.php -->
<form action="process.php" method="post">

    <!-- First name input -->
    <label>First Name:</label><br>
    <input type="text" name="firstName" required><br><br>

    <!-- Last name input -->
    <label>Last Name:</label><br>
    <input type="text" name="lastName" required><br><br>

    <!-- Email input with browser validation -->
    <label>Email Address:</label><br>
    <input type="email" name="email" required><br><br>

    <!-- Message input area -->
    <label>Message:</label><br>
    <textarea name="message" rows="5" required></textarea><br><br>

    <!-- Submit button -->
    <input type="submit" value="Send Message">

</form>

</body>
</html>
