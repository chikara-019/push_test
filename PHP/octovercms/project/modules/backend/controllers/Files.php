<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
