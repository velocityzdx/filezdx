<!DOCTYPE html>
<html>
<head>
    <title>zdxx Receiver</title>
    <style>
        body { background:#111; color:#0f0; font-family:Consolas; padding:20px; }
        h1 { color:#8a5eff; }
        a { color:#6cf; }
    </style>
</head>
<body>
    <h1>zdxx Receiver Panel</h1>
    <p>Public URL: https://easygoing-kindness-production-b964.up.railway.app</p>
    <hr>
<?php
if (is_dir("uploads")) {
    $dirs = scandir("uploads");
    foreach ($dirs as $dir) {
        if ($dir != "." && $dir != ".." && is_dir("uploads/$dir")) {
            echo "<h2><a href='uploads/$dir'>$dir</a></h2>";
        }
    }
} else {
    echo "<p>No uploads yet.</p>";
}
?>
</body>
</html>
