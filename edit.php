<?php
defined('C5_EXECUTE') or die(_("Access Denied."));  

$includeAssetLibrary = true; 
$assetLibraryPassThru = array(
	'type' => 'image'
);
	$al = Loader::helper('concrete/asset_library');

$customIcon = false;
$bf = null;

if ($controller->getIconID() > 0) { 
	$customIcon = true;
	$bf = $controller->getFileObject();
	$icon = null;
}
?>

<h2><?php echo $form->label('content', 'Twitter username');?></h2>
<?php echo $form->text('content', $content, array('style' => 'width: 200px'));?>
<br /><br />
<h2><?php echo t('Choose icon') ?></h2>

<p>
<?php 
	echo $form->radio('icon','1', $icon); echo '<img src="' . $this->getBlockURL() . '/images/twitter1.png" />';
	echo $form->radio('icon','2', $icon); echo '<img src="' . $this->getBlockURL() . '/images/twitter2.png" />';
	echo $form->radio('icon','3', $icon); echo '<img src="' . $this->getBlockURL() . '/images/twitter3.png" />';
	echo $form->radio('icon','4', $icon); echo '<img src="' . $this->getBlockURL() . '/images/twitter4.png" />';
?>
</p>

 
<h2><?php echo t('Custom icon')?></h2>
<?php

echo ($customIcon) ? t('<p>To revert to an icon above, first click the image below and choose \'Clear\'.</p>') : '';

?>

<?php echo $al->image('ccm-b-image', 'fID', t('Choose icon'), $bf);?>
<br /><br />