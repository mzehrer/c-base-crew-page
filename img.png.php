<?php

/**
 * c-base crew page template v1.0b
 * by XeN 2012
 * https://github.com/XenGi/c-base-crew-page
 */

function draw_roundrectangle($img, $x1, $y1, $x2, $y2, $radius, $color, $filled=1)
{
    if($filled==1)
    {
        imagefilledrectangle($img, $x1+$radius, $y1, $x2-$radius, $y2, $color);
        imagefilledrectangle($img, $x1, $y1+$radius, $x1+$radius-1, $y2-$radius, $color);
        imagefilledrectangle($img, $x2-$radius+1, $y1+$radius, $x2, $y2-$radius, $color);

        imagefilledarc($img,$x1+$radius, $y1+$radius, $radius*2, $radius*2, 180 , 270, $color, IMG_ARC_PIE);
        imagefilledarc($img,$x2-$radius, $y1+$radius, $radius*2, $radius*2, 270 , 360, $color, IMG_ARC_PIE);
        imagefilledarc($img,$x1+$radius, $y2-$radius, $radius*2, $radius*2, 90 , 180, $color, IMG_ARC_PIE);
        imagefilledarc($img,$x2-$radius, $y2-$radius, $radius*2, $radius*2, 360 , 90, $color, IMG_ARC_PIE);
    }
    else
    {
        imageline($img, $x1+$radius, $y1, $x2-$radius, $y1, $color);
        imageline($img, $x1+$radius, $y2, $x2-$radius, $y2, $color);
        imageline($img, $x1, $y1+$radius, $x1, $y2-$radius, $color);
        imageline($img, $x2, $y1+$radius, $x2, $y2-$radius, $color);

        imagearc($img,$x1+$radius, $y1+$radius, $radius*2, $radius*2, 180 , 270, $color);
        imagearc($img,$x2-$radius, $y1+$radius, $radius*2, $radius*2, 270 , 360, $color);
        imagearc($img,$x1+$radius, $y2-$radius, $radius*2, $radius*2, 90 , 180, $color);
        imagearc($img,$x2-$radius, $y2-$radius, $radius*2, $radius*2, 360 , 90, $color);
    }
}

if(isset($_GET['border']) && $_GET['border'] != "" && is_numeric($_GET['border']))
{
    $border = $_GET['border'];
}
else
{
    $border = 0;
}
$tag = trim($_GET['tag']);
if(strlen($_GET['bg']) == 3)
{
    $bg =   substr($_GET['bg'], 0, 1).
            substr($_GET['bg'], 0, 1).
            substr($_GET['bg'], 1, 1).
            substr($_GET['bg'], 1, 1).
            substr($_GET['bg'], 2, 1).
            substr($_GET['bg'], 2, 1);
}
else
{
    $bg = $_GET['bg'];
}
if(strlen($_GET['color']) == 3)
{
    $col =  substr($_GET['color'], 0, 1).
            substr($_GET['color'], 0, 1).
            substr($_GET['color'], 1, 1).
            substr($_GET['color'], 1, 1).
            substr($_GET['color'], 2, 1).
            substr($_GET['color'], 2, 1);
}
else
{
    $col = $_GET['color'];
}

// 16*7+15 = 127
$img = imagecreatetruecolor(32+strlen($tag)*7+strlen($tag), 24);

$color['bg'] = imagecolorallocate($img, hexdec(substr($bg, 0, 2)), hexdec(substr($bg, 2, 2)), hexdec(substr($bg, 4, 2)));
$color['color'] = imagecolorallocate($img, hexdec(substr($col, 0, 2)), hexdec(substr($col, 2, 2)), hexdec(substr($col, 4, 2)));

$strbg = hexdec(substr($bg, 0, 2)).hexdec(substr($bg, 2, 2)).hexdec(substr($bg, 4, 2));
$strcol = hexdec(substr($col, 0, 2)).hexdec(substr($col, 2, 2)).hexdec(substr($col, 4, 2));
do
{
    $r = rand(0, 255);
    $color['transparent'] = imagecolorallocate($img, $r, $r, $r);
}
while($r.$r.$r == $strbg || $r.$r.$r == $strcol);

imagecolortransparent($img, $color['transparent']);
imagefill($img, 0, 0, $color['transparent']);
if($border == 0)
{
    draw_roundrectangle($img, 0, 0, 31+strlen($tag)*7+strlen($tag), 23, 4, $color['color'], 1);
    draw_roundrectangle($img, 16, 3, 28+strlen($tag)*7+strlen($tag), 20, 4, $color['bg'], 1);
}
else
{
    imagefilledrectangle($img, 0, 0, 31+strlen($tag)*7+strlen($tag), 23, $color['color']);
    imagefilledrectangle($img, 16, 3, 28+strlen($tag)*7+strlen($tag), 20, $color['bg']);
}
imagestring($img, 4, 23, 4, $tag, $color['color']);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);

?>
