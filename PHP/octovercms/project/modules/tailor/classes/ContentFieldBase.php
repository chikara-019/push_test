<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
