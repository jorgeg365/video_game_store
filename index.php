
<?php
// Homepage settings
$pageTitle = "Home";
$currentPage = "home";

// Reusable header
include 'header.php';
?>

<!-- Main Hero Section -->
<section class="hero-grid">

    <div class="hero-copy">
        <span class="eyebrow">✦ WELCOME TO PIXELVAULT</span>

        <h1>
            YOUR NEXT
            <span class="gradient-text">ADVENTURE</span>
            STARTS HERE.
        </h1>

        <p>
            Discover incredible worlds, epic battles, and
            unforgettable experiences. Your next favorite
            game is just one click away.
        </p>

        <div class="hero-actions">
            <a href="games.php" class="button">
                Explore Games &rarr;
            </a>

            <a href="#genres" class="button button-outline">
                Browse Genres
            </a>
        </div>

        <div class="hero-note">
            🎮 8 Featured Games &nbsp; ✦ &nbsp; 4 Gaming Genres
        </div>
    </div>

    <!-- Featured Game Artwork -->
    <div class="hero-art">
        <div class="hero-halo"></div>

        <div class="featured-poster">
            <span class="poster-label">FEATURED GAME</span>

            <div class="poster-emoji">🚀</div>

            <div class="poster-info">
                <span>SPACE ADVENTURE</span>
                <h2>NEBULA FRONTIER</h2>
                <p>THE UNIVERSE IS YOURS</p>
            </div>
        </div>

        <div class="floating-label floating-one">
            <span>⭐</span>
            <div>
                <strong>Epic Adventures</strong>
                <small>Discover new worlds</small>
            </div>
        </div>

        <div class="floating-label floating-two">
            <span>🎮</span>
            <div>
                <strong>Level Up</strong>
                <small>Your next game awaits</small>
            </div>
        </div>
    </div>

</section>

<!-- Game Categories -->
<section class="genre-section" id="genres">

    <div class="section-heading">
        <div>
            <span class="eyebrow">EXPLORE YOUR STYLE</span>
            <h2>Choose Your Universe</h2>
            <p>Whatever your play style, there's a game for you.</p>
        </div>

        <a href="games.php" class="text-link">
            View All Games &rarr;
        </a>
    </div>

    <div class="genre-grid">

        <a href="games.php?genre=Action"
           class="genre-card action-card">
            <span class="genre-emoji">⚔️</span>
            <span class="genre-tag">FEEL THE ADRENALINE</span>
            <h3>Action</h3>
            <span class="genre-arrow">Explore &rarr;</span>
        </a>

        <a href="games.php?genre=Adventure"
           class="genre-card adventure-card">
            <span class="genre-emoji">🌌</span>
            <span class="genre-tag">DISCOVER NEW WORLDS</span>
            <h3>Adventure</h3>
            <span class="genre-arrow">Explore &rarr;</span>
        </a>

        <a href="games.php?genre=Racing"
           class="genre-card racing-card">
            <span class="genre-emoji">🏎️</span>
            <span class="genre-tag">CHASE THE FINISH LINE</span>
            <h3>Racing</h3>
            <span class="genre-arrow">Explore &rarr;</span>
        </a>

    </div>
</section>

<!-- Bottom Call to Action -->
<section class="bottom-cta">
    <span class="eyebrow">READY PLAYER ONE?</span>
    <h2>Find Your Next Favorite Game.</h2>
    <p>A whole new world is waiting to be explored.</p>
    <a href="games.php" class="button">
        Browse the Collection &rarr;
    </a>
</section>

<?php
// Reusable footer
include 'footer.php';
?>
