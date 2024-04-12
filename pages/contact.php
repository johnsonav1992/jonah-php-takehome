<?php
include 'config/db.php';
include 'utils/utils.php';
?>

<?php

$first_name = $last_name = $email = $message = '';

if (isset($_POST['submit'])) {
    $errors = validate_form();

    $first_name = sanitize_input('first_name');
    $last_name = sanitize_input('last_name');
    $email = sanitize_input('email', true);
    $message = sanitize_input('message');

    if (!$errors) {
        $sql = "INSERT INTO contact_info (first_name, last_name, email, message)
                    VALUES ('$first_name', '$last_name', '$email', '$message')";

        if (mysqli_query($connection, $sql)) {
            echo "Thanks for the message!";
            header('Location: index.php');
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="icon" href="../assets/favicon.png" type="image/x-icon">
    <title>Contact</title>
</head>

<body>
    <?php include_once '../components/header/header.php' ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div style="display: flex; flex-direction: column; width: 200px;">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>
            <button name="submit" type="submit">Submit</button>
        </div>
    </form>
</body>

</html>