<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Record to User Table Form</title>
</head>
<body>
    <form action="exercise2.php" method="post">
        <p>
            <label for="firstName">First Name:</label>
            <input type="text" name="firstname" id="firstName">
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastname" id="lastName">
        </p>
        <input type="submit" name="submit">
    </form>

    <?php 
        if (isset($_POST['submit'])) {
            if ($_POST['firstname'] && $_POST['lastname']) {
               echo "Welcome ". $_POST['firstname']. " ". $_POST['lastname'];
            } else {
                echo "Please insurt your name and surname!";
                }
        }
    ?>
</body>
</html>
