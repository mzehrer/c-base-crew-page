<?php

/**
 * c-base crew page template v0.9
 * by XeN 2012
 * https://github.com/XenGi/c-base-crew-page
 */

header('Content-type: text/html; charset=utf-8');

include('config.inc.php');

function new_urlencode($in)
{
    $out = urlencode($in);
    $out = str_replace('+', '%20', $out);
    $out = str_replace('_', '%5F', $out);
    $out = str_replace('.', '%2E', $out);
    $out = str_replace('-', '%2D', $out);
    return $out;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $member_name; ?>@c-base</title>
    <style>
@import url('style.css.php') all;
    </style>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="author" content="<?php echo $member_name; ?>" />
    <meta name="description" content="<?php echo $member_name; ?>'s c-base crew page" />
    <meta name="keywords" content="<?php for($i=0; $i < count($tags)-1; $i++) { echo htmlspecialchars($tags[$i]).','; } echo htmlspecialchars($tags[count($tags)-1]); ?>" />
    <meta name="robots" content="all" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
</head>
<body>

<header>
<?php

if($member_pic) echo "    <img src=\"member_pic.png\" alt=\"Picture of ".$member_name."\" />\n";

?>
    <h1>[<?php echo $member_name; ?>]</h1>
</header>

<section>
    <article>
        <header>
            <h2>groupS:</h2>
        </header>
        <ul>
<?php

foreach($groups as $group)
{
echo "            <li><a href=\"http://crew.c-base.org/?group=".new_urlencode($group)."\">".htmlentities($group, ENT_QUOTES | ENT_HTML5, 'UTF-8')."</a></li>\n";
}

?>
        </ul>
    </article>
    <article>
        <header>
            <h2>projectS:</h2>
        </header>
        <h3>c-base relateD:</h3>
        <ul>
            <li><a href="#">-</a></li>
        </ul>
        <h3>otheR:</h3>
        <ul>
            <li><a href="#">-</a></li>
        </ul>
    </article>
    <article>
        <header>
            <h2>other websiteS:</h2>
        </header>
        <ul>
            <li><a href="#">some site</a></li>
            <li><a href="#">some other site</a></li>
        </ul>
    </article>
    <article>
        <header>
            <h2>contacT:</h2>
        </header>
        <ul>
            <li>twitter: <a href="#">-</a></li>
            <li>gplus: <a href="#">-</a></li>
            <li>xmpp/c-mail: <a href="mailto:#">-</a></li>
            <li>external email: <a href="mailto:#">-</a></li>
        </ul>
    </article>
    <article>
        <header>
            <h2>tagS:</h2>
        </header>
        <p class="cloud">
<?php

foreach($tags as $tag)
{
    echo "            <a href=\"http://crew.c-base.org/?tag=".new_urlencode($tag)."\"><img class=\"tag\" src=\"img.png.php?".htmlentities("tag=".new_urlencode($tag)."&bg=".$tag_bg."&color=".$tag_color."&border=".$tag_border, ENT_QUOTES | ENT_HTML5, 'UTF-8')."\" alt=\"".htmlentities($tag, ENT_QUOTES | ENT_HTML5, 'UTF-8')."\" /></a>\n";
}

?>
        </p>
    </article>
</section>

<footer>
    <p>by <?php echo $member_name; ?></p>
    <p><small>crew page template by <a href="http://xen.crew.c-base.org">XeN</a></small></p>
</footer>

</body>
</html>
