
<?php
$pageTitle = "Game Catalog";
$currentPage = "games";

// Sample video games
$games = [
    [
        "name" => "Nebula Frontier",
        "genre" => "Adventure",
        "price" => 49.99,
        "icon" => "🚀",
        "accent" => "#8b5cf6"
    ],
    [
        "name" => "Shadow Rift",
        "genre" => "Action",
        "price" => 59.99,
        "icon" => "🥷",
        "accent" => "#f43f5e"
    ],
    [
        "name" => "Turbo Circuit",
        "genre" => "Racing",
        "price" => 39.99,
        "icon" => "🏎️",
        "accent" => "#f97316"
    ],
    [
        "name" => "Ember Kingdom",
        "genre" => "Role-Playing",
        "price" => 44.99,
        "icon" => "🐉",
        "accent" => "#a855f7"
    ],
    [
        "name" => "Arcade Outbreak",
        "genre" => "Action",
        "price" => 29.99,
        "icon" => "👾",
        "accent" => "#22c55e"
    ],
    [
        "name" => "Ocean Odyssey",
        "genre" => "Adventure",
        "price" => 34.99,
        "icon" => "🌊",
        "accent" => "#0ea5e9"
    ],
    [
        "name" => "Velocity X",
        "genre" => "Racing",
        "price" => 49.99,
        "icon" => "🏁",
        "accent" => "#eab308"
    ],
    [
        "name" => "Mystic Valley",
        "genre" => "Role-Playing",
        "price" => 54.99,
        "icon" => "🧙",
        "accent" => "#14b8a6"
    ]
];

// Available genre filters
$genres = [
    "All",
    "Action",
    "Adventure",
    "Racing",
    "Role-Playing"
];

// Read selected genre from the URL
$selectedGenre = $_GET["genre"] ?? "All";

// Validate the selected genre
if (!in_array($selectedGenre, $genres, true)) {
    $selectedGenre = "All";
}

// Filter the games
$filteredGames = [];

foreach ($games as $game) {
    if (
        $selectedGenre === "All" ||
        $game["genre"] === $selectedGenre
    ) {
        $filteredGames[] = $game;
    }
}

// Include reusable header
include 'header.php';
?>

<section class="catalog-header">
    <span class="eyebrow">THE GAME COLLECTION</span>
    <h1>Discover Your Next Obsession.</h1>
    <p>
        Explore our collection of exciting games
        across different genres.
    </p>
</section>

<!-- Genre Filter Navigation -->
<div class="filter-bar">

    <?php foreach ($genres as $genre) { ?>

        <a
            href="games.php<?php
                echo $genre === "All"
                    ? ""
                    : "?genre=" . urlencode($genre);
            ?>"
            class="filter-pill <?php
                echo $selectedGenre === $genre
                    ? "selected"
                    : "";
            ?>"
        >
            <?php echo htmlspecialchars($genre); ?>
        </a>

    <?php } ?>

</div>

<div class="results-line">
    <span>
        Showing <?php echo count($filteredGames); ?> games
    </span>
    <span>PIXELVAULT COLLECTION</span>
</div>

<!-- Dynamic PHP Game Cards -->
<section class="game-grid">

    <?php foreach ($filteredGames as $game) { ?>

        <article class="game-card">

            <div
                class="game-cover"
                style="--accent: <?php
                    echo htmlspecialchars($game["accent"]);
                ?>;"
            >
                <span class="cover-label">PIXELVAULT GAMES</span>

                <span class="game-cover-icon">
                    <?php echo $game["icon"]; ?>
                </span>

                <span class="cover-category">
                    <?php echo htmlspecialchars($game["genre"]); ?>
                </span>
            </div>

            <div class="game-details">
                <span class="game-genre">
                    <?php echo htmlspecialchars($game["genre"]); ?>
                </span>

                <h3>
                    <?php echo htmlspecialchars($game["name"]); ?>
                </h3>

                <div class="game-bottom">
                    <span class="price">
                        $<?php
                            echo number_format($game["price"], 2);
                        ?>
                    </span>

                    <span class="game-availability">
                        ● Featured
                    </span>
                </div>
            </div>

        </article>

    <?php } ?>

</section>

<p class="catalog-disclaimer">
    Game names and prices are demonstration content
    for this class project.
</p>

<?php
// Include reusable footer
include 'footer.php';
?>
