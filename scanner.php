
<?php

function scanFolder($path) {
    $files = scandir($path);

    foreach ($files as $file) {
        if ($file == "." || $file == ".." || $file == ".git") {
            continue;
        }

        $fullPath = $path . "/" . $file;

        if (is_dir($fullPath)) {
            scanFolder($fullPath);
        } else {
            echo "File: " . $file . "<br>";
        }
    }
}

?>