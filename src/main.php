<?php

// Initialize HTML5
?>

<!DOCTYPE html>

<?php


// Loading internal config
require('cfg/interncfg.php');

// Loading site config
require('cfg/sitecfg.php');


/*
- Open HTML tag
- Open Head tag
- Change HTML langage and charset.
*/
?>
<html lang="<?php echo($lang_sitecfg); ?>">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
<?php
// SEO things and page name.
?>


<meta name="description" content="<?php echo($description_sitecfg); ?>" />
<meta name="keywords" content="<?php echo($keywords_sitecfg); ?>" />
<?php if($sayauthor_sitecfg = "true") { ?>
<meta name="author" content="<?php echo($author_sitecfg); ?>" />
<?php } ?>
<meta name="generator" content="<?php echo($gensoft_interncfg.$genver_interncfg); ?>" />

<!-- indev -->
</head>
