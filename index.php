<?php include 'config/db.php'; ?>

<?php 
    $sql = 'SELECT * from contact_info';
    $items = mysqli_query($connection, $sql);
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
    <div>
        <div class="box">
            <?php echo "Hiiii" ?>
        </div>
    </div>
</body>
</html>