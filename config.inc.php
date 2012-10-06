<?php

/**
 * c-base crew page template v0.42
 * by XeN 2012
 * https://github.com/XenGi/c-base-crew-page
 */

/*
#######################
# Begin of config:    #
#######################
*/

// enable or disable areas you don't want:
$area_groups = true;
$area_projects = true;
$area_websites = true;
$area_contact = true;
$area_tags = true;
// set your member name here:
$member_name = "no_member_name";
// enable or disable your member picture (member_pic.png):
$member_pic = true;
//define your tags here:
$groups = array('nerd area');
//define your tags here:
$tags = array(  'blub',
                'cohlenstoffeinheiten',
                'still have the default config');
// choose background color in hex ### or ######:
$tag_bg = "000";
// choose foreground color in hex ### or ######:
$tag_color = "0F0";
// choose rounded border (0) or rectangles (1):
$tag_border = 0;
// add your contact details:
$contactdetails = array(array('type' => 'twitter', 'id' => '@exampleuser', 'url' => 'https://twitter.com/exampleuser'),
                        array('type' => 'gplus', 'id' => 'exampleuser', 'url' => 'http://gplus.to/exampleuser'),
                        array('type' => 'xmpp/c-mail', 'id' => 'exampleuser (a) c-base . org', 'url' => 'mailto:exampleuser@c-base.org'));
// add your websites here:
$websites = array(array('name' => 'example blog', 'url' => 'http://example.com/'),
                  array('name' => 'my github', 'url' => 'http://github.com/exampleuser'));
// add your projects here:
$projects = array(array('c-base' => true, 'name' => 'the thing behind that door', 'url' => 'http://dev.c-base.org/'),
                  array('c-base' => false, 'name' => 'some very cool thing', 'url' => 'http://exampleproject.com/'));

?>
