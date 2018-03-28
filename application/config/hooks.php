<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['pre_system'] = function(){
	//参数一次为appid， appkey， masterkey
	Client::initialize("AhHpWi6q6nu3JvtkjhnO2qXM-gzGzoHsz","1WePIUx9gu2QPbyGbYwD3oW6","gabOdlLn74iFlwjUJhjuhVD0");
	Client::useMasterKey(true);
	Client::setStorage(new CookieStorage());
	$engine = new CIEngine();

	$engine();
};
