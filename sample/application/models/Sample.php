<?php
/**
 * @name SampleModel
 * @desc sampleæ•°æ�®èŽ·å�–ç±», å�¯ä»¥è®¿é—®æ•°æ�®åº“ï¼Œæ–‡ä»¶ï¼Œå…¶å®ƒç³»ç»Ÿç­‰
 * @author root
 */
class SampleModel {
    public function __construct() {
    	echo "Init SamplleModel<br>";
    }   
    
    public function selectSample() {
    	echo "Call selectSample in SamplleModel<br>";
        return 'Hello World!';
    }

    public function insertSample($arrInfo) {
        return true;
    }
}
