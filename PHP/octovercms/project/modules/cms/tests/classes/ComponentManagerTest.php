<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
