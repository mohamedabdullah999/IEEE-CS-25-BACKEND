<?php
function createDirectory($path, $permissions) {
    if (!is_dir($path)) {
        mkdir($path, $permissions, true); 
        chmod($path, $permissions); 
    }
}

function deleteDirectory($path) {
    if (is_dir($path)) {
        $files = array_diff(scandir($path), ['.', '..']); 

        foreach ($files as $file) {
            $filePath = "$path/$file";
            is_dir($filePath) ? deleteDirectory($filePath) : unlink($filePath); 
        }

        rmdir($path); 
        echo "Directory $path Removed\n";
    }
}

$mainDir = "Programming";
$subDir = "$mainDir/PHP";

$permissions = 0701;

createDirectory($subDir, $permissions);

deleteDirectory($subDir);
deleteDirectory($mainDir);
?>
