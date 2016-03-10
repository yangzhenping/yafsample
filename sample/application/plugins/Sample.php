<?php
/**
 * @name SamplePlugin
 * @desc Yafå®šä¹‰äº†å¦‚ä¸‹çš„6ä¸ªHook,æ�’ä»¶ä¹‹é—´çš„æ‰§è¡Œé¡ºåº�æ˜¯å…ˆè¿›å…ˆCall
 * @see http://www.php.net/manual/en/class.yaf-plugin-abstract.php
 * @author root
 */
class SamplePlugin extends Yaf_Plugin_Abstract {

	public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		echo "Call routerStartup in SamplePlugin<br>";
	}

	public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		echo "Call routerShutdown in SamplePlugin<br>";
	}

	public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		echo "Call dispatchLoopStartup in SamplePlugin<br>";
	}

	public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		echo "Call preDispatch in SamplePlugin<br>";
	}

	public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		echo "Call postDispatch in SamplePlugin<br>";
	}

	public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		echo "Call dispatchLoopShutdown in SamplePlugin<br>";
	}
}
