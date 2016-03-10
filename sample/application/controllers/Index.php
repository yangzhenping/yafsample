<?php
/**
 * @name IndexController
 * @author root
 * @desc é»˜è®¤æŽ§åˆ¶å™¨
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends Yaf_Controller_Abstract {

	/** 
     * é»˜è®¤åŠ¨ä½œ
     * Yafæ”¯æŒ�ç›´æŽ¥æŠŠYaf_Request_Abstract::getParam()å¾—åˆ°çš„å�Œå��å�‚æ•°ä½œä¸ºActionçš„å½¢å�‚
     * å¯¹äºŽå¦‚ä¸‹çš„ä¾‹å­�, å½“è®¿é—®http://yourhost/sample/index/index/index/name/root çš„æ—¶å€™, ä½ å°±ä¼šå�‘çŽ°ä¸�å�Œ
     */
	public function indexAction($name = "Stranger") {
		echo "Inside indexAction in IndexController<br>";
		//1. fetch query
		$get = $this->getRequest()->getQuery("get", "default param value");
		
		//2. fetch model
		$model = new SampleModel();

		//3. assign
		$this->_view->word="test:".$get."<br>";
		$this->getView()->assign("content", $model->selectSample());
		$this->getView()->assign("name", $name);
		
		echo "<br>current Module:" . $this->getRequest()->getModuleName();
		echo "<br>current Controller:" . $this->getRequest()->getControllerName();
		echo "<br>current Action:" . $this->getRequest()->getActionName();
		
		echo "<br>getRequestUri:" . $this->getRequest()->getRequestUri();
		echo "<br>getBaseUri:" . $this->getRequest()->getBaseUri()."<br>";
		
		echo "Outside indexAction in IndexController<br>";
		//4. render by Yaf, å¦‚æžœè¿™é‡Œè¿”å›žFALSE, Yafå°†ä¸�ä¼šè°ƒç”¨è‡ªåŠ¨è§†å›¾å¼•æ“ŽRenderæ¨¡æ�¿
        return TRUE;
	}
}
