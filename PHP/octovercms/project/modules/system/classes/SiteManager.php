<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
