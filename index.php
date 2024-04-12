<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./components/header/header.css">
    <link rel="stylesheet" href="./components/footer/footer.css">
    <link rel="stylesheet" href="./styles/card-sections.css">
    <link rel="icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Jonah Take Home Project</title>
</head>

<body>
    <div class="main-wrapper">
        <?php include_once 'components/header/header.php' ?>
        <div class="inner-wrapper">
            <div class="call-to-action-container">
                <p class="caption-text caption-text-large">Video Library</p>
                <h2>Dive deep into everything Jonah has to offer with a library of engaging videos.</h2>
            </div>
            <div class="video-card-container">
                <h2 class="white-text">Welcome to Jonah!</h2>
                <button class="black-button">Watch Video</button>
            </div>
            <div class="main-content-wrapper">
                <?php include_once 'components/themes-section/themes_section.php' ?>
                <?php include_once 'components/content-editor-section/content_editor_section.php' ?>
            </div>
        </div>
    </div>
    <?php include_once 'components/footer/footer.php' ?>
</body>

</html>