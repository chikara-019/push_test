<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
