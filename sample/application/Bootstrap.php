<?php
/**
 * @name Bootstrap
 * @author root
 * @desc æ‰€æœ‰åœ¨Bootstrapç±»ä¸­, ä»¥_initå¼€å¤´çš„æ–¹æ³•, éƒ½ä¼šè¢«Yafè°ƒç”¨,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * è¿™äº›æ–¹æ³•, éƒ½æŽ¥å�—ä¸€ä¸ªå�‚æ•°:Yaf_Dispatcher $dispatcher
 * è°ƒç”¨çš„æ¬¡åº�, å’Œç”³æ˜Žçš„æ¬¡åº�ç›¸å�Œ
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{

    public function _initConfig() {
    	echo "Call _initConfig in Bootstrap<br>";
		//æŠŠé…�ç½®ä¿�å­˜èµ·æ�¥
		$arrConfig = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $arrConfig);
	}

	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
		echo "Call _initPlugin in Bootstrap<br>";
		//æ³¨å†Œä¸€ä¸ªæ�’ä»¶
		$objSamplePlugin = new SamplePlugin();
		$dispatcher->registerPlugin($objSamplePlugin);
	}

	public function _initRoute(Yaf_Dispatcher $dispatcher) {
		echo "Call _initRoute in Bootstrap<br>";
		Yaf_Dispatcher::getInstance()->getRouter()->addRoute(
		             "supervar",new Yaf_Route_Supervar("r")
		       );
		Yaf_Dispatcher::getInstance()->getRouter()->addRoute(
				            "simple", new Yaf_Route_simple('m', 'c', 'a')
				         );
		
		//åœ¨è¿™é‡Œæ³¨å†Œè‡ªå·±çš„è·¯ç”±å��è®®,é»˜è®¤ä½¿ç”¨ç®€å�•è·¯ç”±
	}
	
	public function _initView(Yaf_Dispatcher $dispatcher){
		echo "Call _initView in Bootstrap<br>";
		//åœ¨è¿™é‡Œæ³¨å†Œè‡ªå·±çš„viewæŽ§åˆ¶å™¨ï¼Œä¾‹å¦‚smarty,firekylin
	}
}
