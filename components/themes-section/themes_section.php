<?php
$cards = [
    [
        'title' => 'Convert Prospects Faster With SkyLease',
        'description' => 'Beautiful and effective: get the best of both worlds with SkyLease',
        'img' => 'assets/phone-call.jpeg'
    ],
    [
        'title' => 'Make Conversions Easier with PopDown',
        'description' => 'Schedule your pop and avoid the block.',
        'img' => 'assets/keyboard.jpg'
    ],
    [
        'title' => '3 Steps to a Smoother Lease-Up',
        'description' => 'There’s a lot going on when you have a property in lease-up. Oftentimes, it’s a mad dash to get everythin...',
        'img' => 'assets/video.jpeg'
    ],
    [
        'title' => '3 Steps to a Smoother Lease-Up',
        'description' => 'There’s a lot going on when you have a property in lease-up. Oftentimes, it’s a mad dash to get everythin...',
        'img' => 'assets/video.jpeg'
    ],
]
?>

<div class="theme-section-wrapper">
    <h3>Demo Our Premium Themes</h3>
    <div class="row-container gap-2 scroll-x">
        <?php foreach ($cards as $card) : ?>
            <div class="video-card">
                <div class="card-info-container">
                    <p class="card-title">
                        <?php echo $card['title'] ?>
                    </p>
                    <p class="card-details">
                        <?php echo $card['description'] ?>
                    </p>
                </div>
                <div class="card-image" style="<?php echo "background: url(" . $card['img'] . ") 50% / cover no-repeat;" ?>"></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>