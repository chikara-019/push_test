<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
