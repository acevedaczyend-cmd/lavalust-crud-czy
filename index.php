<?php
// Root bridge to LavaLust framework entry point
if (file_exists(__DIR__ . '/LavaLust/index.php')) {
    require_once __DIR__ . '/LavaLust/index.php';
} elseif (file_exists(__DIR__ . '/lavalust/index.php')) {
    require_once __DIR__ . '/lavalust/index.php';
} else {
    // Fallback search for any inner index.php
    $files = glob(__DIR__ . '/*/index.php');
    if (!empty($files)) {
        require_once $files[0];
    } else {
        echo "LavaLust index.php not found.";
    }
}