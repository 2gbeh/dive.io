<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (!$meta_viewport) {echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';} ?>
<meta name="robots" content="NOODP" />
<meta name="language" content="EN" />
<meta name="subject" content="<?php echo $MANIFEST->type; ?>" />
<meta name="description" content="<?php echo $meta_desc ? $meta_desc : $MANIFEST->meta["Desc"]; ?>" />
<meta name="keywords" content="dive,online courses,online tutorials,course modules,ebook,moocs,ocw,courseware,repository,hwp labs,tugbeh emmanuel" />
<meta name="author" content="Tugbeh Emmanuel" />
<meta name="copyright" content="<?php echo $MANIFEST->copyright; ?>" />
<meta name="owner" content="<?php echo $MANIFEST->client["Company"]; ?>" />
<meta name="reply-to" content="<?php echo $MANIFEST->webmail["Contact"]; ?>" />
<meta name="url" content="<?php echo $MANIFEST->url; ?>" />
<meta name="rating" content="General" />
<meta name="revised" content="2019-02-18 09:00" />
<?php 
if (!$meta_title) {$meta_title = $MANIFEST->meta["Title"];}
if ($meta_page) {$meta_title = $meta_page." | ".$MANIFEST->abbr;} 
?>
<title><?php echo $meta_title; ?></title>    
