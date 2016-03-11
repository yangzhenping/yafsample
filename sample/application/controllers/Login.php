<?php
/**
 * @name IndexController
 * @author root
 * @desc é»˜è®¤æŽ§åˆ¶å™¨
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class LoginController extends Yaf_Controller_Abstract {

	/** 
     * é»˜è®¤åŠ¨ä½œ
     * Yafæ”¯æŒ�ç›´æŽ¥æŠŠYaf_Request_Abstract::getParam()å¾—åˆ°çš„å�Œå��å�‚æ•°ä½œä¸ºActionçš„å½¢å�‚
     * å¯¹äºŽå¦‚ä¸‹çš„ä¾‹å­�, å½“è®¿é—®http://yourhost/sample/index/index/index/name/root çš„æ—¶å€™, ä½ å°±ä¼šå�‘çŽ°ä¸�å�Œ
     */
	public function indexAction() {
		echo "Inside indexAction in LoginController<br>";

		//2. fetch model
		$model = new SampleModel();

		//3. assign
// 		$this->getView()->assign("content", $model->selectSample());
// 		Yaf_Dispatcher::getInstance()->disableView();
// 		$this->initView();
		$routes = Yaf_Dispatcher::getInstance()->getRouter()->getRoutes();
		print_r($routes);
		
		echo "Outside indexAction in LoginController<br>";
		
        return TRUE;
	}
}
