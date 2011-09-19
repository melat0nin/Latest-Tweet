<?php  
	defined('C5_EXECUTE') or die(_("Access Denied."));  
	$icon = $controller->getIcon();
?>

<div class="tweet">
<?php // import & display latest tweet

echo $controller->getIcon();
echo $content;
$username = $content;
$feed = "http://search.twitter.com/search.atom?q=from:".$content."&rpp=1";




$latest_tweet = $controller->get_feed($feed);


if (!empty($latest_tweet)) {
	echo $controller->parse_feed($latest_tweet);
} else {
	echo t('Latest tweet couldn\'t be retrieved');
}






?>
</div>