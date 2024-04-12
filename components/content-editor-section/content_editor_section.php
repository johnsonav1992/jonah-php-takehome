<?php
$cards = [
    [
        'title' => 'Virtual Tour Manager: Empowering Online Leasing Decisions',
        'description' => 'Giving your prospects the ability to envision themselves living in your community is more critical now ...',
        'img' => 'assets/chatting.jpeg'
    ],
    [
        'title' => 'Resident Testimonials Manager: the Power of Social Proof',
        'description' => '91% of millennials trust online testimonials as much as personal recommendations from friends and family. ...',
        'img' => 'assets/running.png'
    ],
    [
        'title' => 'Premium Themes',
        'description' => 'Fast, easy, and powerful. Premium Theme websites let you have it all. Beautiful AND easy? That’s a win!',
        'img' => 'assets/lifting.png'
    ],
    [
        'title' => 'Premium Themes',
        'description' => 'Fast, easy, and powerful. Premium Theme websites let you have it all. Beautiful AND easy? That’s a win!',
        'img' => 'assets/lifting.png'
    ],
]
?>

<div class="theme-section-wrapper">
    <h3>Using Jonah’s Content Editor</h3>
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
                <div class="card-image" style="<?php echo "background: url(" . $card['img'] . ") 50% / cover no-repeat;" ?>">
                    <button class="card-button">
                        <img src="assets/TriangleArrow-Right.svg" alt="arrow" style="transform: translate(10%)">
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>