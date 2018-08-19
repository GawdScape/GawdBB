<?php
/**
 * GawdScape Page: Error 404
 * Copyright 2018 GawdTech Inc, All Rights Reserved
 */

define('IN_MYBB', 1);
define('THIS_SCRIPT', '404.php');

$forumdir = ".";
require_once $forumdir."/global.php";

$page_url = get_current_location();
add_breadcrumb("Error 404", $page_url);

eval("\$page = \"".$templates->get("gs_error_404")."\";");
output_page($page);
