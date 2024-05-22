<?php
$image_dir = "photoforpage/";
$images = [];
if (!$dir = opendir($image_dir)) {
    die("Cannot open $image_dir");
}

while (false !== ($image = readdir($dir))) {
    if ($image != "." && $image != ".." && (strtolower(substr($image, -4)) == "jpeg" || strtolower(substr($image, -3)) == "jpg")) {
        array_push($images, $image);
    }
}

echo "<h1 align='center'>Iphone XR</h1>";
echo "<table id='gallery'><tr>";
$count = 0;
foreach ($images as $value) {
    echo "<td valign='bottom'><a href='".$image_dir.$value."'><img src='photoforpage/".$value."' /></a></td>";
    $count++;
    if ($count >= 2) {
        echo "</tr><tr>";
        $count = 0;
    }
}
echo "</tr></table>";
closedir($dir);
?>
