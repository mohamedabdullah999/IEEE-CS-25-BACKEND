<?php
function getFileSize($filePath) {
    if (!file_exists($filePath)) {
        die("File doesn't exist");
    }

    $fileSizeBytes = filesize($filePath);
    
    $fileSizeMB = number_format($fileSizeBytes / (1024 ** 2), 2);
    $fileSizeKB = number_format($fileSizeBytes / 1024, 2);

    echo "$fileSizeMB Megabyte\n";
    echo "$fileSizeKB Kilobyte\n";
}

$videoFile = "D:/phpFolder/Videos/video.mp4"; 

getFileSize($videoFile);
?>
