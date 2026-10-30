
<?php
// Shared header for all pages
$pageTitle = $pageTitle ?? "Home";
$currentPage = $currentPage ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> | PixelVault Games</title>
    <link rel="stylesheet"
          href="/video_game_store/css/styles.css">
</head>
<body>

<header class="site-header">
    <div class="container header-content">
        <a href="index.php" class="logo">
            🎮 PixelVault Games
        </a>

        <nav>
            <a href="index.php"
               class="<?php echo $currentPage === 'home' ? 'active' : ''; ?>">
                Home
            </a>
            <a href="games.php"
               class="<?php echo $currentPage === 'games' ? 'active' : ''; ?>">
                Games
            </a>
        </nav>
    </div>
</header>

<main class="container">
