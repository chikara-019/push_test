<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
