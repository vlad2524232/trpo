<?php
namespace vlad;

use core\LogAbstract;
use core\LogInterface;

Class Log extends LogAbstract implements LogInterface {

  public static function write() {
	return Log::Instance()->_write();
  }

  public static function log($str) {
    Log::Instance()->log[] = $str;
  }

  public function _write() {
	echo implode("\n", Log::Instance()->log);
  }
}

?>
