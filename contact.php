<?php
session_start();
include 'config/db.php';
include 'utils/utils.php';
?>

<?php

$first_name = $last_name = $email = $message = '';
$errors = [];

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
            $_SESSION['success'] = "Message submitted successfully!";
            header('Location: contact.php');
            exit(0);
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
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/contact.css">
    <link rel="stylesheet" href="./components/header/header.css">
    <link rel="stylesheet" href="./components/footer/footer.css">
    <link rel="icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Contact</title>
</head>

<body>
    <div class="main-wrapper">
        <?php include_once './components/header/header.php' ?>
        <div class="main-contact-wrapper">
            <div class="column-container">
                <h2>Have Questions?</h2>
                <h3>Send us a message!</h3>
            </div>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <h6 style="margin-bottom: 1rem;">
                    <?php
                    if (isset($_SESSION['success'])) {
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    }
                    ?>
                </h6>
                <div class="contact-form">
                    <div class="form-group">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="textfield <?php echo array_key_exists('first_name', $errors) ? "field-error" : null; ?> ">
                        <?php if (array_key_exists('first_name', $errors)) : ?>
                            <p class="error-message"><?php echo $errors['first_name']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class=" form-group">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="textfield <?php echo array_key_exists('last_name', $errors) ? "field-error" : null; ?> ">
                        <?php if (array_key_exists('last_name', $errors)) : ?>
                            <p class="error-message"><?php echo $errors['last_name']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="textfield <?php echo array_key_exists('email', $errors) ? "field-error" : null; ?> ">
                        <?php if (array_key_exists('email', $errors)) : ?>
                            <p class="error-message"><?php echo $errors['email']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" class="textfield text-area <?php echo array_key_exists('message', $errors) ? "field-error" : null; ?> " rows="6"></textarea>
                        <?php if (array_key_exists('message', $errors)) : ?>
                            <p class="error-message"><?php echo $errors['message']; ?></p>
                        <?php endif; ?>
                    </div>
                    <button name="submit" type="submit" class="black-button contact-submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?php include_once './components/footer/footer.php' ?>
</body>

</html>