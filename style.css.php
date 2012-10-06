<?php

/**
 * c-base crew page template v0.9
 * by XeN 2012
 * https://github.com/XenGi/c-base-crew-page
 */

header('Content-type: text/css');
include('config.inc.php');

?>

@charset "UTF-8";

* { margin: 0; padding: 0; }
body { background-color: black; color: lime; font: 11px Verdana,Helvetica,sans-serif; }
a { color: lime; text-decoration: none; font-weight: bold; }
small { font-size: 8px }
header,footer { text-align: center; margin: 10px; }
h1,h2,h3 { font-weight: bold; }
h1 { font-size: 18px; }
h2 { font-size: 14px; text-align: left; }
h3 { font-size: 12px; text-align: left; margin: 5px 25px; }
li { margin: 0 45px; }
p { margin: 0 25px; }
img { border: none; margin: 2px; }
article { max-width: 480px; margin: 0 auto; padding: 10px; border-left: 1px dashed lime; border-right: 1px dashed lime; }
.cloud { line-height:33px; max-width: 440px; }
<?php

if($tag_border == 0)
{
    echo "img.tag:hover { border: 2px solid lime; border-radius: 8px; margin: 0; }";
}
else
{
    echo "img.tag:hover { border: 2px solid lime; margin: 0; }";
}
?>
