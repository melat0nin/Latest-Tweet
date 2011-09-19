<?php	
	defined('C5_EXECUTE') or die(_("Access Denied."));  
		
	class LaurenceTestBlockController extends BlockController {
		
		var $pobj;
		
		protected $btDescription = "A simple testing block for developers.";
		protected $btName = "Laurence Test";
		protected $btTable = 'btBasicTest';
		protected $btInterfaceWidth = "350";
		protected $btInterfaceHeight = "400";
		
		public function getIcon() {
			if ($this->fID) {
				$customIcon = File::getByID($this->fID);
				return '<img src="'.$customIcon->getRelativePath().'" alt="Twitter icon" />';
			} else if ($this->icon) {
				$bv = new BlockView();
				$bv->setBlockObject($this->getBlockObject());
				$blockURL = $bv->getBlockURL();
				return '<img src="'.$blockURL.'/images/twitter'.$this->icon.'.png" alt="Twitter icon" width="48" height="48" />';
			}
		}
		
		function getIconID() {
			return $this->fID;
		}
		function getFileObject() {
			return File::getByID($this->fID);
		}
		
		public function parse_feed($feed) {
			$stepOne = explode('<content type="html">', $feed);
			$stepTwo = explode('</content>', $stepOne[1]);
			$tweet = $stepTwo[0];
			$tweet = str_replace("&lt;", "<", $tweet);
			$tweet = str_replace("&gt;", ">", $tweet);
			return $tweet;
		}
		
		public function get_feed($feed) {
			$context = stream_context_create(array(
				'http' => array(
				'timeout' => 3      // Timeout in seconds (in case Twitter is down, which isn't unlikely)
				)
			));
			
			$contents = @file_get_contents($feed, 0, $context);
			
			if (!empty($contents)) {
				return $contents;
			}		
		}
		

		
		
		/*function save() {
			
		
			/*$val = Loader::helper('validation/error');
			if ($_POST['content'] == '') {
				$val->add('You must specify a username.');
			}
	
			if ($val->has()) {
				print t('There\'s an error:');
				$val->output();
			}
						
		}*/
		
	}
	
?>