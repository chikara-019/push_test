<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
