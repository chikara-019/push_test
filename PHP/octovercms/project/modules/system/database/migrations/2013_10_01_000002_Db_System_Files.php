<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
