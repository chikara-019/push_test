<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
