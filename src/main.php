<?php

// Initialize HTML5
?>

<!DOCTYPE html>

<?php

// Loading config
include('./cfg/config.php');

// Loading internal config
include('./cfg/interncfg.php');

// Loading site config
include('./cfg/sitecfg.php');


/*
- Open HTML tag
- Open Head tag
- Change HTML langage and charset depending on language.
*/

if(lang_cfg = 'en' OR lang_cfg = 'fr' OR lang_cfg = 'es') {
utf8_interncfg = true;
}
?>
<html lang="<?php echo(lang_cfg); ?>">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=<?php echo(utf8_interncfg); ?>"> 
<?php
// SEO things and page name.
?>


<meta name="description" content="<?php echo(description_pagecfg . " ~ " description_sitecfg?>" />
<meta name="keywords" content="<?php echo(keywords_pagecfg . ", " keywords_sitecfg); ?>" />
<?php if(sayauthor_sitecfg = "true") { ?>
<meta name="author" content="<?php echo(author_sitecfg);?>" />
<?php } ?>
<meta name="generator" content="<?php echo(gensoft_intercfg . genver_interncfg); ?>" />

<!-- indev -->
</head>