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
    <title>XeN@c-base</title>
    <style>
@import url('style.css.php') all;
    </style>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="author" content="XeN" />
    <meta name="description" content="XeNs c-base crew page" />
    <meta name="keywords" content="<?php for($i=0; $i < count($tags)-1; $i++) { echo htmlspecialchars($tags[$i]).','; } echo htmlspecialchars($tags[count($tags)-1]); ?>" />
    <meta name="robots" content="all" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
</head>
<body>

<header>
<?php include('img.inc.php'); ?>
    <h1>[XeN]</h1>
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
            <li><a href="https://github.com/XenGi/c-mobile">c-mobile</a></li>
        </ul>
        <h3>otheR:</h3>
        <ul>
            <li><a href="https://www.ohloh.net/p/PyPaH">PyPaH</a></li>
            <li><a href="http://megazord.xengi.de/">MegaZord</a></li>
        </ul>
    </article>
    <article>
        <header>
            <h2>other websiteS:</h2>
        </header>
        <ul>
            <li><a href="http://xengi.de/">primary blog</a></li>
            <li><a href="http://makesyouhappy.org/">secondary blog</a></li>
            <li><a href="http://bugs.xengi.de/">bugtracker</a></li>
            <li><a href="https://github.com/XenGi/">github</a></li>
            <li><a href="https://www.ohloh.net/accounts/XenGi">ohloh</a></li>
        </ul>
    </article>
    <article>
        <header>
            <h2>contacT:</h2>
        </header>
        <ul>
            <li>twitter: <a href="https://twitter.com/XenGi_">@XenGi_</a></li>
            <li>gplus: <a href="http://gplus.to/XenGi">XenGi</a></li>
            <li>xmpp/c-mail: <a href="mailto:xen@c-base.org">xen (a) c-base . org</a></li>
            <li>external email: <a href="mailto:me@xengi.de">me (a) xengi . de</a></li>
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
    <p>by [XeN] 2012</p>
</footer>

</body>
</html>
