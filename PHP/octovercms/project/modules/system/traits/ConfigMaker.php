<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
