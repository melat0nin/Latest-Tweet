<?php
defined('C5_EXECUTE') or die(_("Access Denied."));  

$assetLibraryPassThru = array(
	'type' => 'image'
);
$al = Loader::helper('concrete/asset_library');
?>

<p>Enter your Twitter username:</p>

<?php echo $form->label('content', 'Twitter username:');?>
<?php echo $form->text('content', array('style' => 'width: 200px'));?>
<br /><br />
<p>Choose icon:</p>


<?php  echo $form->radio('icon','1', $icon);?> <?php   echo '<img src="' . $this->getBlockURL() . '/images/twitter1.png" />'; ?> 
<?php  echo $form->radio('icon','2', $icon);?> <?php   echo '<img src="' . $this->getBlockURL() . '/images/twitter2.png" />';?>
<?php  echo $form->radio('icon','3', $icon);?> <?php   echo '<img src="' . $this->getBlockURL() . '/images/twitter3.png" />';?>
<?php  echo $form->radio('icon','4', $icon);?> <?php   echo '<img src="' . $this->getBlockURL() . '/images/twitter4.png" />';?> 
      
<h2><?php echo t('Choose icon')?></h2>
<?php echo $al->image('ccm-b-image', 'fID', t('Choose icon'), $bf);?>
<br /><br />