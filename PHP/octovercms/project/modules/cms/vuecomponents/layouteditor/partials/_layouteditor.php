<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
