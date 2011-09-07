<?php
/**
 * DX Image Box Helper
 *
 * DX Image Box Helper provides methods to run your lightbox in a simple and quick manner.
 *
 * @category Helper
 * @package  Croogo
 * @version  1.3
 * @author   Mario Peshev <mpeshev@devrix.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.devrix.com/dximagebox
 */
class DximageboxHelper extends AppHelper {
/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
    public $helpers = array(
        'Html'
    );
	
	/**
	*  expects jquery to be loaded
	* tag history
	*/
	public function lightMe($selector = 'body a:has(img)') {
			$output = "<script type='text/javascript'>
							$(document).ready(function() {	
								$('$selector').fancybox();
							});
						</script>";
		
		return $output;
	}
/**
 * Before render callback. Called before the view file is rendered.
 *
 * @return void
 */
    public function beforeRender() {
		$this->Html->script('/dximagebox/js/jquery.fancybox-1.3.4', array('inline' => false));
		$this->Html->script('/dximagebox/js/jquery.mousewheel-3.0.4.pack', array('inline' => false));
		$this->Html->script('/dximagebox/js/jquery.easing-1.3.pack', array('inline' => false));
		$this->Html->css('/dximagebox/css/jquery.fancybox-1.3.4', null, array('inline' => false)); 
		
    }
}

?>