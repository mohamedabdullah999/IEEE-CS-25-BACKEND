<?php
function getTotalDiskSpace($drives) {
    $totalSpace = 0;
    $count = 0;

    foreach ($drives as $drive) {
        if ($count >= 2) break; 
        if (is_dir($drive)) {
            $totalSpace += disk_total_space($drive);
            $count++;
        }
    }

    $terabytes = number_format($totalSpace / (1024 ** 4), 2);

    return "$terabytes Terabyte";
}

$windowsDrives = ['C:/', 'D:/', 'E:/', 'F:/'];

$linuxDrives = ['/'];

echo getTotalDiskSpace(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? $windowsDrives : $linuxDrives);
?>
