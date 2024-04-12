<?php 
    include 'config/db.php'; 
    include 'utils/utils.php';
?>

<?php 
    $sql = 'SELECT * from contact_info';
    $result = mysqli_query($connection, $sql);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $first_name = $last_name = $email = $message = '';
    
    if (isset($_POST['submit'])) {
        $errors = [];

        if (empty($_POST['first_name'])) {
            $errors['first_name'] = 'First name is required';
        } else {
            $first_name = sanitize_input('first_name');
        }

        if (empty($_POST['last_name'])) {
            $errors['last_name'] = 'Last name is required';
        } else {
            $last_name = sanitize_input('last_name');
        }

        if (empty($_POST['email'])) {
            $errors['email'] = 'Email is required';
        } else {
            $email = sanitize_input('email', true);
        }

        if (empty($_POST['message'])) {
            $errors['message'] = 'Message is required';
        } else {
            $message = sanitize_input('message');
        }

        if (!$errors) {
            echo "yay!";
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

<?php if(empty($items)): ?>
    <p>There are no items</p>
<?php endif; ?>

<?php foreach($items as $item): ?>
    <div>
        <p><?php echo $item['first_name'] ?></p>
        <p><?php echo $item['last_name'] ?></p>
        <p><?php echo $item['email'] ?></p>
        <p><?php echo $item['message'] ?></p>
    </div>
<?php endforeach; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
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