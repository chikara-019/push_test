<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
